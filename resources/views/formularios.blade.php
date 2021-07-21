@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('dropify/dist/css/dropify.min.css') }}">
<style>
  @media only screen and (max-width: 600px) {
      .inicial{
          display: initial;
      }
      .imagen{
          width: 80%;
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
<div class="container inicial">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-center">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
                    <h4 class="card-title" style="font-size: 20px;">장애인 편의지원 Servicios especiales para
                        solicitantes discapacitadas</h4>
                    <form action="{{ url('subirformularios') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-sm">
                                    <input type="file" name="servicios_especiales" id="imagen" data-max-file-size="100M" />
                                    <a href="{{ asset('documentos/TOPIK I Y II FORMULARIO Y LINK DE PAGO (2).docx')}}">Descargar</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title mt-5" style="font-size: 20px;">한국어능력시험 응시원서 Formato de Registro</h4>
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-sm">
                                    <input type="file" name="formato_registro" id="imagen" data-max-file-size="100M"/>
                                    <a href="{{ asset('documentos/첨부03. 한국어능력시험 응시원서 Registration Form.docx')}}">Descargar</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container mt-5">
                            <div class="row text-center">
                                <div class="col">
                                    <button type="submit" class="btn btn-warning">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
