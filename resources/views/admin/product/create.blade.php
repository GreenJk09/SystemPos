@extends('layouts.admin')
@section('title', 'Registro de Productos')
@section('styles')

@endsection
@section('options')
@endsection

@section('preferences')
@section('content')

<div class="page-header">
    <h3 class="page-title">Registrar Productos</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Productos</a></li>
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
                        <h4> Registrar Producto</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="info">
                            {!! Form::open(['route'=>'products.store', 'method'=>'POST', 'files' => true]) !!}
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="helpId" placeholder="Nombre" required />
                            </div>
                            <div class="form-group">
                                <label for="sell_price">Precio</label>
                                <input type="number" name="sell_price" class="form-control" id="sell_price" placeholder="10.00" required />
                            </div>
                            <div class="form-group">
                                <label for="category_id">Categoría</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    @foreach ($categories as $category )
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="provider_id">Proveedor</label>
                                <select class="form-control" name="provider_id" id="provider_id">
                                    @foreach ($providers as $provider )
                                    <option value="{{$provider->id}}">{{$provider->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card mb-4">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Subir Imagen <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="picture" id="picture" accept="image/*">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="104857601322" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-icon-text mr-2"><i class="mdi mdi-content-save btn-icon-prepend"></i> Guardar </button>
                            <a class="btn btn-danger btn-icon-text mr-2" href="{{ route('products.index') }}">
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
    @section('scripts')
    <script>
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
    @endsection
