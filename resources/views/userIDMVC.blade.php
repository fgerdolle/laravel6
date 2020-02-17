@extends('layout')

@section('title', 'USER ID ')

@section('content')

<p> Hello my name is {{ $user->firstName }}  {{ $user->lastName }} and my ID is {{ $user->id }}</p>

@endsection