@extends('layouts.admin')
@section('title', 'Gestión de Clientes')
@section('styles')
<style>
  .unstyled-button {
    border: none;
    padding: 0;
    background: none;
  }
</style>
@endsection

@section('options')
@endsection

@section('preferences')
@section('content')
<div class="page-header">
  <div class="page-title">
    <h3>Clientes</h3>
  </div>
  <nav class="breadcrumb-one" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/Panel">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg>
        </a>
      </li>
      <li class="breadcrumb-item active" aria-current="page"><span>Clientes</span></li>
    </ol>
  </nav>
</div>

<div class="row layout-top-spacing layout-spacing">
  <div class="col-lg-12">
    <div class="statbox widget box box-shadow">
      <div class="widget-header">
        <div class="row">
          <div class="col-xl-8">
            <h4>
              Clientes
            </h4>

          </div>
          <div class="col-xl-4 text-right">
            <a class="btn btn-primary mb-2 mr-2" style="margin-top:5px" href="{{route('clients.create')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
              </svg> Agregar Cliente</a>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area">
        <div class="table-responsive mb-4">
          <table id="style-2" class="table style-2  table-hover">
            <thead>
              <tr>
                <th class="checkbox-column"></th>
                <th>Id</th>
                <td>Nombre</td>
                <th>DUI</th>
                <th>NIT</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Teléfono/Celular</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clients as $client)
              <tr>
                <td class="checkbox-column">1</td>
                <td>{{$client->id}}</td>
                <td>
                  <a href="{{route('clients.show',$client)}}">{{$client->name}}</a>
                </td>
                <td>{{$client->dui}}</td>
                <td>{{$client->nit}}</td>
                <td>{{$client->address}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
                <td style="width: 50px;">
                  {!!Form::open(['route'=>['clients.destroy',
                  $client], 'method'=>'DELETE'])!!}
                  <a href="{{ route('clients.edit', $client) }}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                      <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg></a>

                  <button href="javascript:void(0);" class="jsgrid-button jsgrid-delete-button unstyled-button bs-tooltip" type="submit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></button>
                  {!! Form::Close() !!}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  @endsection

  @section('scripts')
  <script>
    c2 = $('#style-2').DataTable({
      headerCallback: function(e, a, t, n, s) {
        e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
      },
      columnDefs: [{
        targets: 0,
        width: "30px",
        className: "",
        orderable: !1,
        render: function(e, a, t, n) {
          return '<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
        }
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
          "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
        },
        "sInfo": "Página _PAGE_ de _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Buscar...",
        "sLengthMenu": "Mostrar :  _MENU_",
      },
      "lengthMenu": [5, 10, 20, 50],
      "pageLength": 5
    });
  </script>
  @endsection
