@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <h3 class="mt-12 mb-4">Datos personales</h3>
        <div class="row">
            <div class="col-md-12">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username">{{ $user->name_english }}</h3>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Nombre en koreano</h5>
                                    <span class="description-text">{{ $user->name_korean }}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Correo</h5>
                                    <span class="description-text">{{ $user->email }}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">Fecha de nacimiento</h5>
                                    @php
                                        $fecha = Carbon\Carbon::parse($user->age);
                                    @endphp
                                    <span class="description-text">{{ $fecha->format('Y-m-d') }}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                        <!-- /.col -->
                        </div>
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Genero</h5>
                                    <span class="description-text">{{ $user->gender }}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Codigo postal</h5>
                                    <span class="description-text">{{ $user->codigo_postal }}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            
                            
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
        </div>
    </div>
</section>
@endsection