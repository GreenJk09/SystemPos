<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <div class="section general-info">
            <div class="info">
                <h6 class="">Registro de Compras</h6>
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="provider_id">Proveedor</label>
                                    <select class="form-control" name="provider_id" id="provider_id">
                                        @foreach ($providers as $provider )
                                        <option value="{{$provider->id}}">{{$provider->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tax">IVA</label>
                                    <input type="number" class="form-control" name="tax" id="tax" aria-describedby="helpId" placeholder="13%">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="product_id">Productos</label>
                                    <select class="form-control" name="product_id" id="product_id">
                                        @foreach ($products as $product )
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quantity">Cantidad</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity" aria-describedby="helpId" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Precio de compra</label>
                                    <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="0">
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <button type="button" id="agregar" class="btn btn-secondary float-right">Agregar Producto</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <div class="section contact">
            <div class="info">
                <h5 class="">Detalle de Compra</h5>
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="table-responsive col-md-12">
                                <table id="detalles" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Eliminar</th>
                                            <th>Producto</th>
                                            <th>Precio(USD)</th>
                                            <th>Cantidad</th>
                                            <th>SubTotal(USD)</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th colspan="4">
                                                <p align="right">Total:</p>
                                            </th>
                                            <th>
                                                <p align="right"><span id="total">USD 0.00</span></p>
                                            </th>
                                        </tr>
                                        <tr id="dvOcultar">
                                            <th colspan="4">
                                                <p align=right>Total IVA (13%):</p>
                                            </th>
                                            <th>
                                                <p align="right"><span id="total_impuesto">USD 0.00</span></p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="4">
                                                <p align="right">Total a Pagar:</p>
                                            </th>
                                            <th>
                                                <p align="right"><span align="right" id="total_pagar_html">USD 0.00</span>
                                                 <input type="hidden" name="total" id="total_pagar"></p>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
