@extends('template')

@section('title', 'Contact')

@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Contactez-moi</h4>
            <div class="card-body">
                <form action="{{ route('contact.create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control  @error('firstName') is-invalid @enderror" name="firstName" id="firstName" placeholder="Votre firstName" value="{{ old('firstName') }}">
                        @error('firstName')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  @error('lastName') is-invalid @enderror" name="lastName" id="lastName" placeholder="Votre lastName" value="{{ old('lastName') }}">
                        @error('lastName')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Votre password" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                   
                    
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>
@endsection