@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
     @media only screen and (max-width: 600px) {
         .small{
             width: 100%;
             font-size: 8px;
             text-align: center;
         }
         .height{
             height: 39px;
         }
         .movil{
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
                        <img class="movil" src="{{ asset('images/logo-koreano.png')}}" alt="">
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
                        <a href="{{ url('papeles')}}">
                            <button class="btn btn-warning small height">DOCUMENTOS
                                <i class="fa fa-check"></i>
                            </button>
                        </a>
                        @else
                        <a href="{{ url('papeles')}}">
                            <button class="btn btn-danger small">DOCUMENTOS
                                <i class="fas fa-times"></i>
                            </button>
                        </a>  
                        @endif
                    </div>
                    <div class="col-3">
                        @if ($user->servicios_especiales && $user->formato_registro)
                        <a href="{{ url('formularios')}}">
                            <button class="btn btn-warning small height">FORMULARIOS
                                <i class="fa fa-check"></i>
                            </button>
                        </a>
                        @else
                        <a href="{{ url('formularios')}}">
                            <button class="btn btn-danger small">FORMULARIOS
                                <i class="fas fa-times"></i>
                            </button>
                        </a>
                        @endif
                    </div>
                    <div class="col-3">
                        @if ($user->comprobante_pago)
                        <a href="{{ url('comprobante')}}">
                            <button class="btn btn-warning small height">COMPROBANTE DE PAGO
                                <i class="fa fa-check"></i>
                            </button>
                        </a>
                        @else
                        <a href="{{ url('comprobante')}}">
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
                                <select class="custom-select" onchange="showInp()" id="topic" name="topic" style="width: 50%;">
                                    <option selected disabled>Seleccione su TOPIK</option>
                                    <option value="1">TOPIK I</option>
                                    <option value="2">TOPIK II</option>
                                </select>
                                <div class="input-group-append">
                                    <a href="https://biz.payulatam.com/L0cd3c448774456" target="_blank" style="display: none"  id="boton" class="btn btn-warning">Pagar</a>
                                    <a href="https://biz.payulatam.com/L0cd3c4BDA25D6A" target="_blank"  id="boton2" style="display: none" class="btn btn-warning">Pagar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function showInp()
    {
        getSelectValue = document.getElementById("topic").value;
        if(getSelectValue == "1")
        {
            document.getElementById("boton").style.display = "inline";
            document.getElementById("boton2").style.display = "none";

        }else if(getSelectValue == "2")
        {
            document.getElementById("boton").style.display = "none";
            document.getElementById("boton2").style.display = "inline";
        }
    }
</script>
@endsection
