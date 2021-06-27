@extends('layouts.admin')
@section('title', 'Registro de Compras')
@section('styles')

@endsection
@section('options')
@endsection

@section('preferences')
@section('content')

<div class="page-header">
    <h3 class="page-title">Registrar Compras</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
            <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Compras</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Registrar </li>
        </ol>
    </nav>
</div>
<div class="account-settings-container layout-top-spacing">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            {!! Form::open(['route' => 'purchases.store', 'method' => 'POST']) !!}
            @include("admin.purchase._form")


        </div>
        <div class="account-settings-footer">
            <div class="as-footer-container">
                <button type="submit" id="multiple-messages" class="btn btn-primary">Registrar</button>
                <a class="btn btn-danger" href="{{ route('purchases.index') }}">
                    Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
    <script type="text/javascript">
    $(document).ready(function () {
    $("#agregar").click(function () {
        agregar();
    });
});

var cont = 0;
total = 0;
subtotal = [];

$("#guardar").hide();

function agregar() {
    product_id = $("#product_id").val();
    producto = $("#product_id option:selected").text();
    quantity = $("#quantity").val();
    price = $("#price").val();
    impuesto = $("#tax").val();

    if (product_id != "" && quantity != "" && quantity > 0 && price != "") {
        subtotal[cont] = quantity * price;
        total = total + subtotal[cont];
        var fila =
            '<tr class="selected" id="fila' +
            cont +
            '"><td><button type="button" class="btn btn-danger mb-2 mr-2" onclick="eliminar(' +
            cont +
            ');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></button></td> <td><input type="hidden" name="product_id[]" value="'+product_id+'">' +
            producto +
            '</td> <td> <input type="hidden" id="price[]" name="price[]" value="' +
            price +
            '"> <input class="form-control" type="number" id="price[]" value="' +
            price +
            '" disabled> </td>  <td> <input type="hidden" name="quantity[]" value="' +
            quantity +
            '"> <input class="form-control" type="number" value="' +
            quantity +
            '" disabled> </td> <td align="right">$/' +
            subtotal[cont] +
            " </td></tr>";
        cont++;
        limpiar();
        totales();
        evaluar();
        $("#detalles").append(fila);
    } else {
        Swal.fire({
            type: "error",
            text: "Rellene todos los campos del detalle de la compras",
        });
    }
}

function limpiar() {
    $("#quantity").val("");
    $("#price").val("");
}

function totales() {
    $("#total").html("USD " + total.toFixed(2));
    total_impuesto = (total * impuesto) / 100;
    total_pagar = total + total_impuesto;
    $("#total_impuesto").html("USD " + total_impuesto.toFixed(2));
    $("#total_pagar_html").html("USD " + total_pagar.toFixed(2));
    $("#total_pagar").val(total_pagar.toFixed(2));
}

function evaluar() {
    if (total > 0) {
        $("#guardar").show();
    } else {
        $("#guardar").hide();
    }
}

function eliminar(index) {
    total = total - subtotal[index];
    total_impuesto = (total * impuesto) / 100;
    total_pagar_html = total + total_impuesto;
    $("#total").html("PEN" + total);
    $("#total_impuesto").html("PEN" + total_impuesto);
    $("#total_pagar_html").html("PEN" + total_pagar_html);
    $("#total_pagar").val(total_pagar_html.toFixed(2));
    $("#fila" + index).remove();
    evaluar();
}

    </script>
    @endsection
