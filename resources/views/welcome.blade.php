<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo-koreano.png')}}">
    <title>Topic</title>
</head>
<body>
<style>
    @media only screen and (max-width: 600px) {
        .justificar{
            display: grid;
        }
        .imagen{
            width: 90%;
        }
        .small_text{
            font-size: 19px !important;
        }
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="container mt-5 justificar">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col text-center mb-5">
                    <img class="imagen" src="{{ asset('images/logo-koreano.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="small_text" style="text-align: center; font-size: 24px;">
                        Bienvenido al examen <strong>TOPIK (Test of proficiency in korean)</strong> 2do <br>
                        semestre: octubre/noviembre, si ya esta registrado por favor hacer clic<br>
                        en Ingresar.
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 mt-5">
                <div class="justify-content-center text-center">
                    <a href="{{ route('login') }}" class="text-center">
                        <button class="btn btn-warning" style="color: white; width:28%; height:50px">Ingresar</button>
                    </a>
                </div>
            </div><br>
            
            @php
                $users = App\User::all()->count();
            @endphp
            @if ($users < 41)
            <div class="col-xs-12">
                <h2 style="text-align: center; font-size: 20px;">
                    Si no esta inscrito
                </h2>
            </div>
            <div class="col-xs-12 mt-3">
                <div class="justify-content-center text-center">
                    <a href="{{ route('register') }}" class="text-center">
                        <button class="btn btn-warning" style="color: white; width:28%; height:50px">Registrar</button>
                    </a>
                </div>
            </div>
            @else
            <div class="col-xs-12">
                <h2 style="text-align: center; font-size: 20px;">
                    En este momento no hay mas cupos para incripciones
                </h2>
            </div>
            <div class="col-xs-12 mt-3">
                <div class="justify-content-center text-center">
                    <a href="" class="text-center">
                        <button class="btn btn-warning" style="color: white; width:28%; height:50px" disabled>Registrar</button>
                    </a>
                </div>
            </div>
            @endif
            
        </div>
    </div>
</div>

</body>
</html>

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
