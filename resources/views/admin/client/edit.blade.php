@extends('layouts.admin')
@section('title', 'Edición de Clientes')
@section('styles')

@endsection
@section('options')
@endsection

@section('preferences')
@section('content')

<div class="page-header">
    <h3 class="page-title">Editar Clientes</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
            <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Editar </li>
        </ol>
    </nav>
</div>
<div class="row layout-top-spacing layout-spacing">
    <div class="col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h4> Editar Cliente</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="info">
                            {!! Form::model($client, ['route'=>['clients.update', $client], 'method'=>'PUT']) !!}
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="helpId" placeholder="Nombre" value="{{$client->name}}" required />
                            </div>
                            <div class="form-group">
                                <label for="dui">DUI</label>
                                <input type="text" name="dui" class="form-control" id="dui" placeholder="Dui" value="{{$client->dui}}" />
                            </div>
                            <div class="form-group">
                                <label for="nit">NIT</label>
                                <input type="text" name="nit" class="form-control" id="nit" placeholder="Nit sin guión" value="{{$client->nit}}" />
                                <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                            </div>
                            <div class="form-group">
                                <label for="address">Dirección</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="San Salvador" value="{{$client->address}}"  />
                                <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="example@outlook.es" value="{{$client->email}}"  />
                                <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono/Celular</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="78122134" value="{{$client->phone}}" />
                                <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                            </div>


                            <button type="submit" class="btn btn-secondary btn-icon-text mr-2"><i class="mdi mdi-content-save btn-icon-prepend"></i> Guardar </button>
                            <a class="btn btn-dark btn-icon-text mr-2" href="{{ route('clients.index') }}">
                                <i class="mdi mdi-close btn-icon-prepend"></i> Cancelar</a>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
    @endsection