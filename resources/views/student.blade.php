@extends('layout')

@section('title', 'Student')

@section('content')

{{ $student->firstName }} {{ $student->lastName }}

@endsection