@extends('layout')

@section('content')
    <masthead-component></masthead-component>

    <how-it-works-component></how-it-works-component>

    <why-choose-component></why-choose-component>

    <sign-up-component></sign-up-component>

    <travel-tips-component v-bind:limit="4"></travel-tips-component>

    <past-deals-component></past-deals-component>

    <map-component></map-component>
@stop

