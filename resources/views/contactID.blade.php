@extends('layout')

@section('title', 'contact ID ')

@section('content')

<p> Hello my name is {{ $contact->name }}, my email is {{ $contact->email }}, you can call my at my phone : {{ $contact->phone }} <br>and you can visite me at this adress : {{ $contact->adress }}</p>

@endsection