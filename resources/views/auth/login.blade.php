@extends('layouts.app')

@section('content')
<style>
     @media only screen and (max-width: 600px) {
         .imagen{
             width: 90%;
         }
         .centrar{
             display: grid;
         }
     }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="row">
    <div class="col text-center mb-5">
        <img class="imagen" src="{{ asset('images/logo-koreano.png')}}" alt="">
    </div>
</div>
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <h1 class="text-center mb-3" style="font-size: 25px;">Ingrese sus datos personales.</h1>
            <div class="row text-center">
                <div class="col text-center">
                    <div class="container">
                        <div class="row text-center" style="display: inline-flex;">
                            <form method="POST" action="{{ route('login') }}" class="text-center">
                                @csrf
                                <div class="form-group row text-center centrar" >
                                    <div class="col-md-12">
                                        <label for="" class="float-left">Correo Electrónico</label>
                                        <input id="email" type="email" class="form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="" class="float-left">Contraseña</label>
                                        <input id="password" type="password" class="form form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        {{-- <div class="form-check">
                                        @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('¿Olvido su contraseña?') }}
                                                </a>
                                            @endif
                                        </div><br> --}}
                                        <div class="col-md-12">
                                            <div class="form-check mb-5 pb-5">
                                            <button type="submit" class="btn btn-warning" style="color: white;  width:50%; height:50px">
                                                    {{ __('Ingresar') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
