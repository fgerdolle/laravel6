@extends('layout')

@section('title', 'Users')

@section('content')
    <form action="{{ route('PostCreateUser') }}" method="POST">
        @csrf
        <label for="name">Entrez votre nom : </label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Envoyer !">
    </form>
@endsection

