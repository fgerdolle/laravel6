@extends('layout')

@section('title', 'Session')

@section('content')

<p> Hello my name is {{ Session::get('name') }}  </p>

@endsection