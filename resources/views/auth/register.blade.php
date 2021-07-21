@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col text-center mb-5">
            <img class="ocultar" src="{{ asset('images/logo-koreano.png')}}" alt="">
        </div>
    </div>
</div>
<style>
    @media only screen and (max-width: 600px) {
        .nombre{
            display: inline;
        }
        .ocultar{
           width: 100%;
        }
        .ajustar{
            width: min-content;
        }

        .ocultar-en-movil{
            display: none
        }
    }
    @media only screen and (min-width: 600px) {
        .ocultar-en-pc{
            display: none;
        }
  }
}
</style>
<div class="container ocultar-en-movil">
    <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <div class="row text-center">
                <div class="col text-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="name_korean" class="text-left">한글이름 Nombre en Coreano (completo)</label>
                                        <input id="name_korean" type="text" class="form-control @error('name_korean') is-invalid @enderror" name="name_korean" value="{{ old('name_korean') }}" requiredcompleto en koreano" autocomplete="name_korean" autofocus>
                                        @error('name_korean')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="password" class="text-left">Contraseña</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="name_english" class="text-left">영문이름 Nombre en inglés (completo)</label>
                                        <input id="name_english" type="text" class="form-control @error('name_english') is-invalid @enderror" name="name_english" value="{{ old('name_english') }}" requiredcompleto en ingles" autocomplete="name_english" autofocus>
                                        @error('name-english')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="name_english" class="text-left">Confirmar Contraseña</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" requiredsu Contraseña" autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="name_english" class="text-left">이메일 Correo electrónico</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" requiredElectrónico" autocomplete="email" >
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="name_english" class="text-left">생년월일 Fecha de nacimiento</label>
                                        <input class="form-control" type="date" value="{{ old('age') }}" name="age" id="fecha_ini">
                                    </div>
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row p-3">
                                <label for="" class=" mt-2" style="text-align: initial;">성별 Género</label>
                                <div class="col-6">
                                    <div class="form-check form-switch text-left mt-4">
                                        <input class="form-check-input" name="gender" value="masculino" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">남자 Masculino</label>
                                    </div>
                                   <div class="form-check form-switch text-left">
                                        <input class="form-check-input" name="gender" value="femenino" type="checkbox" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">여자 Femenino</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row mt-1">
                                        <label for="" style="text-align: initial;">국적 Nacionalidad</label>
                                        <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus >
                                        @error('nationality')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row mt-1">
                                        <label for="" style="text-align: initial;">Idioma materno</label>
                                        <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="idioma_materno" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus >
                                        @error('nationality')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group row p-3">
                                      <label for="" style="text-align: initial;">국적 Ocupación</label>
                                        <select class="form-select form-select-lg mb-3" name="occupation" aria-label=".form-select-lg example">
                                            <option selected value="estudiante">Estudiante</option>
                                            <option value="funcionario">Funcionario</option>
                                            <option value="empleado">Empleado</option>
                                            <option value="independiente">Independiente</option>
                                            <option value="ama_de_casa">Ama de casa</option>
                                            <option value="profesores">Profesores</option>
                                            <option value="sin_empleo">Sin empleo</option>
                                            <option value="otros">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group row p-3">
                                      <label for="" style="text-align: initial;">응시동기 ¿Como se enteró del examen del topik?</label>
                                        <select class="form-select form-select-lg mb-3" name="reason" aria-label=".form-select-lg example">
                                            <option selected value="medio_de_comunicacion">Medio de comunicación</option>
                                            <option value="pagina web de topik">Página web de topik</option>
                                            <option value="periodico">Periódico</option>
                                            <option value="revista">Revista</option>
                                            <option value="colegio_o_Universidad">Colegio o Universidad</option>
                                            <option value="pancarta">Pancarta</option>
                                            <option value="familia">Familia</option>
                                            <option value="amigos">Amigos</option>
                                            <option value="internet">Internet</option>
                                            <option value="otros">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group row p-3">
                                      <label for="" style="text-align: initial;">응시목적 Propósito</label>
                                        <select class="form-select form-select-lg mb-3" name="purpose" aria-label=".form-select-lg example">
                                            <option selected value="estudio_o_exterior">Estudio o Exterior</option>
                                            <option value="trabajo">Trabajo</option>
                                            <option value="obtener credito de universidad">Obtener crédito de universidad</option>
                                            <option value="programacion de sociedad">Programación de sociedad</option>
                                            <option value="investigación académica">Investigación académica</option>
                                            <option value="prueba_de_dominio_de_idioma">Prueba de dominio de idioma</option>
                                            <option value="intereses_culturales">Intereses culturales</option>
                                            <option value="otros">otros</option>
                                            <option value="visa">Visa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group row p-3">
                                        <label for="" style="text-align: initial;">Código postal</label>
                                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="codigo_postal" value="{{ old('phone') }}" required autocomplete="phone" autofocus >
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row p-3 mt-0">
                                        <label for="" style="text-align: initial;">Dirección</label>
                                        <input type="text" class="form-control" name="direccion" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row p-3">
                                        <label for="" style="text-align: initial;">핸드폰 Contacto telefónico</label>
                                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus >
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row p-3 mt-0">
                                        <label for="" style="text-align: initial;">도시 Ciudad</label>
                                        <input type="text" class="form-control" name="city" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group row p-3">
                                      <label for="" style="text-align: initial;">¿Tiene alguna discapacidad?</label>
                                        <select class="form-select form-select-lg mb-3" name="purpose" aria-label=".form-select-lg example">
                                            <option selected value="no">No</option>
                                            <option value="si">Si</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-warning" style="color: white; width:20%; height:50px">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container ocultar-en-pc">
    <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <div class="row text-center">
                <div class="col text-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="container nombre">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group row p-3">
                                        <label for="name_korean" class="text-left">한글이름 Nombre en Coreano (completo)</label>
                                        <input id="name_korean" type="text" class="form-control @error('name_korean') is-invalid @enderror" name="name_korean" value="{{ old('name_korean') }}" requiredcompleto en koreano" autocomplete="name_korean" autofocus>
                                        @error('name_korean')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="password" class="text-left">Contraseña</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container nombre">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group row p-3">
                                        <label for="name_english" class="text-left">영문이름 Nombre en inglés (completo)</label>
                                        <input id="name_english" type="text" class="form-control @error('name_english') is-invalid @enderror" name="name_english" value="{{ old('name_english') }}" requiredcompleto en ingles" autocomplete="name_english" autofocus>
                                        @error('name-english')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="name_english" class="text-left">Confirmar Contraseña</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" requiredsu Contraseña" autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container nombre">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="name_english" class="text-left">이메일 Correo electrónico</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" requiredElectrónico" autocomplete="email" >
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row p-3">
                                        <label for="name_english" class="text-left">생년월일 Fecha de nacimiento</label>
                                        <input class="form-control" type="date" value="{{ old('age') }}" name="age" id="fecha_ini">
                                    </div>
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="container nombre">
                            <div class="row p-3">
                                <label for="" class=" mt-2" style="text-align: initial;">성별 Género</label>
                                <div class="col-6">
                                    <div class="form-check form-switch text-left mt-4">
                                        <input class="form-check-input" name="gender" value="gender-male" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">남자 Masculino</label>
                                    </div>
                                   <div class="form-check form-switch text-left">
                                        <input class="form-check-input" name="gender" value="gender-feminine" type="checkbox" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">여자 Femenino</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row mt-1">
                                        <label for="" style="text-align: initial;">국적 Nacionalidad</label>
                                        <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus >
                                        @error('nationality')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container nombre">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group row p-3">
                                      <label for="" style="text-align: initial;">국적 Ocupación</label>
                                        <select class="form-select form-select-lg mb-3" name="occupation" aria-label=".form-select-lg example">
                                            <option selected value="estudiante">Estudiante</option>
                                            <option value="funcionario">Funcionario</option>
                                            <option value="empleado">Empleado</option>
                                            <option value="independiente">Independiente</option>
                                            <option value="ama_de_casa">Ama de casa</option>
                                            <option value="profesores">Profesores</option>
                                            <option value="sin_empleo">Sin empleo</option>
                                            <option value="otros">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group row p-3">
                                      <label for="" style="text-align: initial;">응시동기 Motivo</label>
                                        <select class="form-select form-select-lg mb-3" name="reason" aria-label=".form-select-lg example">
                                            <option selected value="medio_de_comunicacion">Medio de comunicación</option>
                                            <option value="periodico">Periódico</option>
                                            <option value="revista">Revista</option>
                                            <option value="colegio_o_Universidad">Colegio o Universidad</option>
                                            <option value="pancarta">Pancarta</option>
                                            <option value="familia">Familia</option>
                                            <option value="amigos">Amigos</option>
                                            <option value="internet">Internet</option>
                                            <option value="otros">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group row p-3">
                                      <label for="" style="text-align: initial;">응시목적 Propósito</label>
                                        <select class="form-select form-select-lg mb-3" name="purpose" aria-label=".form-select-lg example">
                                            <option selected value="estudio_o_exterior">Estudio o Exterior</option>
                                            <option value="trabajo">Trabajo</option>
                                            <option value="turismo">Turismo</option>
                                            <option value="investigación académica">Investigación académica</option>
                                            <option value="prueba_de_dominio_de_idioma">Prueba de dominio de idioma</option>
                                            <option value="intereses_culturales">Intereses culturales</option>
                                            <option value="otros">otros</option>
                                            <option value="visa">Visa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group row p-3">
                                        <label for="" style="text-align: initial;">핸드폰 Contacto telefónico</label>
                                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus >
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row p-3 mt-0">
                                        <label for="" style="text-align: initial;">도시 Ciudad</label>
                                        <input type="text" class="form-control" name="city" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-warning" style="color: white; width:50%; height:50px">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










