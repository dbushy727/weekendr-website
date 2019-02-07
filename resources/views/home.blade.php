@extends('layout')

@section('content')
    <masthead-component></masthead-component>

    <how-it-works-component></how-it-works-component>

    <sign-up-component></sign-up-component>

    <why-choose-component></why-choose-component>

    {{-- <travel-tips-component v-bind:limit="4"></travel-tips-component> --}}

    <past-deals-component></past-deals-component>

    <map-component></map-component>

    <ticker-component></ticker-component>
@stop

