@extends('backend.layouts.master')

@section('content')
    <p>Name: {{ Auth::user()->name }}</p>
    <p>Name: {{ Auth::user()->email }}</p>
    <img src="{{ Auth::user()->profile }}" />
    <p>Name: {{ Auth::user()->password }}</p>
@endsection
