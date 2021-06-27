@extends('layouts.admin')
@section('title', 'Registro de Proveedores')
@section('styles')

@endsection
@section('options')
@endsection

@section('preferences')
@section('content')

<div class="page-header">
    <h3 class="page-title">Registrar Proveedores</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Proveedores</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Registrar </li>
        </ol>
    </nav>
</div>
<div class="row layout-top-spacing layout-spacing">
    <div class="col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h4> Registrar Proveedor</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="info">
                            {!! Form::open(['route'=>'providers.store','method'=>'POST']) !!}
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="helpId" placeholder="Nombre" required />
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="ejemplo@gmail.com" required />
                            </div>
                            <div class="form-group">
                                <label for="name">NIT</label>
                                <input type="text" name="nit" class="form-control" id="nit" ria-describedby="emailhelpId" placeholder="NIT" required />
                            </div>
                            <div class="form-group">
                                <label for="name">Dirección</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="address" />
                            </div>
                            <div class="form-group">
                                <label for="name">Teléfono/Celular</label>
                                <input type="text" name="phone" class="form-control" id="name" placeholder="Teléfono" />
                            </div>



                            <button type="submit" class="btn btn-primary btn-icon-text mr-2"><i class="mdi mdi-content-save btn-icon-prepend"></i> Guardar </button>
                            <a class="btn btn-danger btn-icon-text mr-2" href="{{ route('providers.index') }}">
                                <i class="mdi mdi-close btn-icon-prepend"></i> Cancelar</a>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
