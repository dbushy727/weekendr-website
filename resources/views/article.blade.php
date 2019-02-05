@extends('layout')

@section('content')
    <header class="masthead d-flex" style='background-image: radial-gradient(rgba(255, 255, 255, 0.5) 10%, rgba(0, 0, 0, 0.2)), url("{{ $article["image"] }}"); background-repeat: no-repeat; background-size: cover;'>
      <div class="container text-center my-auto">
        <h1 class="mb-2">{{ $article['title'] }}</h1>
        <h3 class="mb-5">{{ $article['description'] }}</h3>
      </div>
      <div class="overlay"></div>
    </header>

    <section class="content-section text-dark text-left" style="padding-top: 3em;">
        <div class="container">
            <div class="content-section-header"></div>
            <div class="content-section-body">
                @foreach($article['article'] as $template)
                    @if($template['type'] == 'paragraph')
                        <p>{{$template['data']}}</p>
                    @elseif($template['type'] == 'image')
                        <img src="{{$template['data']}}" style="margin: 2em 0; width: 100%">
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@stop
