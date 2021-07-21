@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        @media only screen and (max-width: 600px) {
            .small {
                width: 100%;
                font-size: 8px;
                text-align: center;
            }

            .height {
                height: 39px;
            }

            .movil {
                width: 100%;
            }
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="col text-center mb-5">
                            <img class="movil" src="{{ asset('images/logo-koreano.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-3">
                            <button class="btn btn-warning small height">REGISTRO
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                        <div class="col-3">
                            @if ($user->tarjeta_identificacion && $user->foto)
                                <a href="{{ url('papeles') }}">
                                    <button class="btn btn-warning small height">DOCUMENTOS
                                        <i class="fa fa-check"></i>
                                    </button>
                                </a>
                            @else
                                <a href="{{ url('papeles') }}">
                                    <button class="btn btn-danger small">DOCUMENTOS
                                        <i class="fas fa-times"></i>
                                    </button>
                                </a>
                            @endif
                        </div>
                        <div class="col-3">
                            @if ($user->servicios_especiales && $user->formato_registro)
                                <a href="{{ url('formularios') }}">
                                    <button class="btn btn-warning small height">FORMULARIOS
                                        <i class="fa fa-check"></i>
                                    </button>
                                </a>
                            @else
                                <a href="{{ url('formularios') }}">
                                    <button class="btn btn-danger small">FORMULARIOS
                                        <i class="fas fa-times"></i>
                                    </button>
                                </a>
                            @endif
                        </div>
                        <div class="col-3">
                            @if ($user->comprobante_pago)
                                <a href="{{ url('comprobante') }}">
                                    <button class="btn btn-warning small height">COMPROBANTE DE PAGO
                                        <i class="fa fa-check"></i>
                                    </button>
                                </a>
                            @else
                                <a href="{{ url('comprobante') }}">
                                    <button class="btn btn-danger small">COMPROBANTE DE PAGO
                                        <i class="fas fa-times"></i>
                                    </button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row text-center">
                        <div class="col-12">
                            <form action="">
                                @csrf
                                <div class="input-group mb-3">
                                    <select class="custom-select" onchange="showInp()" id="topic" name="topic"
                                        style="width: 50%;">
                                        <option selected disabled>Seleccione su TOPIK</option>
                                        <option value="1">TOPIK I</option>
                                        <option value="2">TOPIK II</option>
                                    </select>
                                    <div class="input-group-append">
                                        <a href="https://biz.payulatam.com/L0cd3c448774456" target="_blank"
                                            style="display: none" id="boton" class="btn btn-warning">Pagar</a>
                                        <a href="https://biz.payulatam.com/L0cd3c4BDA25D6A" target="_blank" id="boton2"
                                            style="display: none" class="btn btn-warning">Pagar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if ($user->foto)
                                <img src="{{ Storage::url($user->foto) }}" alt="Admin"
                                class="rounded-circle" width="150">
                                @else
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">  
                                @endif
                                
                                <div class="mt-3">
                                    <h4>{{ $user->name_english }}</h4>
                                    <p class="text-secondary mb-1">{{ $user->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre en ingles</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->name_korean }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre en koreano</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->name_korean }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->email }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Fecha de nacimiento</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @php
                                        $fecha = Carbon\Carbon::parse($user->age);
                                    @endphp
                                    {{ $fecha->format('d-m-Y') }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Genero</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->gender }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nacionalidad</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->nationality }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Idioma materno</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->idioma_materno }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Ocupación</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->occupation }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">¿Como se enteró del examen del topik?</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->reason }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Proposito</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->purpose }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Telefono</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->phone }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Ciudad</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->city }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">¿Tiene alguna discapacidad?</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->discapacidad }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tarjeta de identificación</h6>
                                </div>
                                @if ($user->tarjeta_identificacion)
                                <div class="col-sm-9 text-secondary">
                                    <a href="{{ Storage::url($user->tarjeta_identificacion) }} " download="{{ $user->tarjeta_identificacion }}">Descargar</a>
                                </div>
                                @endif
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Foto</h6>
                                </div>
                                @if ($user->foto)
                                <div class="col-sm-9 text-secondary">
                                    <a href="{{ Storage::url($user->foto) }}" download="{{ $user->foto }}">Descargar</a>
                                </div>
                                @endif
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mi formulario de servicios especiales</h6>
                                </div>
                                @if ($user->servicios_especiales)
                                <div class="col-sm-9 text-secondary">
                                    <a href="{{ Storage::url($user->servicios_especiales) }}" download="{{ $user->servicios_especiales }}">Descargar</a>
                                </div> 
                                @endif
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mi formato de registro</h6>
                                </div>
                                @if ($user->formato_registro)
                                <div class="col-sm-9 text-secondary">
                                    <a href="{{ Storage::url($user->formato_registro) }}" download="{{ $user->formato_registro }}">Descargar</a>
                                </div> 
                                @endif
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mi comprobante de pago</h6>
                                </div>
                                @if ($user->comprobante_pago)
                                <div class="col-sm-9 text-secondary">
                                    <a href="{{ Storage::url($user->comprobante_pago) }}" download="{{ $user->comprobante_pago }}">Descargar</a>
                                </div>
                                @endif
                            </div>
                            <hr>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function showInp() {
            getSelectValue = document.getElementById("topic").value;
            if (getSelectValue == "1") {
                document.getElementById("boton").style.display = "inline";
                document.getElementById("boton2").style.display = "none";

            } else if (getSelectValue == "2") {
                document.getElementById("boton").style.display = "none";
                document.getElementById("boton2").style.display = "inline";
            }
        }
    </script>
@endsection
