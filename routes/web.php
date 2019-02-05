<?php

use Illuminate\Http\Request;
use Mailchimp\MailchimpLists;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/api/places/{query}', function ($query) {
    $curl    = curl_init();
    $api_key = env('SKYSCANNER_API_KEY');
    $query   = $query;

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/US/USD/en-US/?query=" . urlencode($query),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "X-RapidAPI-Key: {$api_key}",
            "cache-control: no-cache"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
});

Route::post('/api/subscribe', function (Request $request) {
    $mailchimp = new MailchimpLists(env('MAILCHIMP_API_KEY'));
    $list      = $mailchimp->getLists()->lists[0];
    $email     = $request->input('email');
    $airport   = $request->input('airport');

    if (empty($email) || empty($airport)) {
        abort(400, 'Email and airport are both required');
    }

    try {
        $subscriber = $mailchimp->addMember($list->id, $email, [
            'status' => 'subscribed',
            'merge_fields' => [
                'AIRPORT' => $airport
            ]
        ]);

        return response()->json(['subscriber_id' => $subscriber->id]);

    } catch (\Exception $e) {
        abort(400, 'There was a problem subscribing user: ' . $e->getMessage());
    }
});

Route::get('/api/travel-tips', function () {
    return config('travel-tips');
});

Route::get('/thank-you', function () {
    return view('thank-you');
});

Route::get('/travel-tips', function () {
    return view('travel-tips');
});

Route::get('/travel-tips/{city}', function ($city) {

    $article = array_first(config('travel-tips'), function ($travel_tip) use ($city) {
        return $city == kebab_case($travel_tip['title']);
    });

    if (!$article) {
        abort(404);
    }

    return view('article', compact('article'));
});