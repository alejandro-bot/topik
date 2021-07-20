@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    @media only screen and (max-width: 600px) {
        .ocultar-movil{
            display: none;

        }
        .imagen{
            width: 80%;
        }
    }
    @media only screen and (min-width: 600px) {
        .ocultar-pc{
            display: none;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col text-center mb-5">
            <img class="imagen" src="{{ asset('images/logo-koreano.png')}}" alt="">
        </div>
    </div>
</div>
<div class="container ocultar-movil">
    <form action="{{ url('subircomprobante') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        <div class="row text-center">
            <div class="col">
                <label for="" class="float-left">지불 증명서 Comprobante de pago</label>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03"><i class="fas fa-upload"></i></button>
                    <input type="file" name="comprobante_pago" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" name="foto" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>
</div>

<form action="{{ url('subircomprobante') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
    @csrf
    <div class="container ocultar-pc">
        <div class="row text-center">
            <div class="col">
                <label for="" class="float-left">지불 증명서 Comprobante de pago</label>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03"><i class="fas fa-upload"></i></button>
                    <input type="file" name="comprobante_pago" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" name="foto" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</form>
@endsection
