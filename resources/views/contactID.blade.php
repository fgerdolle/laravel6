@extends('layout')

@section('title', 'contact ID ')

@section('content')

<p> Hello my name is {{ $contact->firstName }} {{ $contact->lastName }}, my email is {{ $contact->email }} </p>

@endsection