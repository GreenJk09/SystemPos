@extends('layouts.admin')
@section('title', 'Registro de Categorías')
@section('styles')

@endsection
@section('options')
@endsection

@section('preferences')
@section('content')

    <div class="page-header">
        <h3 class="page-title">Editar Categorías</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorías</a></li>
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
                            <h4> Editar Categorías</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <div class="info">
                                {!! Form::model($category, ['route' => ['categories.update', $category], 'method' => 'PUT']) !!}
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre"
                                            value="{{ $category->name }}" required />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Descripción</label>
                                        <textarea class="form-control" id="description" name="description"
                                            rows="3">{{ $category->description }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark mb-2">Guardar </button>
                                <a class="btn btn-secondary mb-2" href="{{ route('categories.index') }}">
                                     Cancelar</a>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
