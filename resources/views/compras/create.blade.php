@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="/compras/index">
                @csrf
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Cliente:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="proveedor" name="proveedor">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Fecha:</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="fecha" name="fecha">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <table>
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Valor Unitario</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" id="producto" name="producto[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="cantidad" name="cantidad[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="valor_unitario" name="valor_unitario[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="subtotal" name="subtotal[]">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="text" class="form-control" id="producto" name="producto[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="cantidad" name="cantidad[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="valor_unitario" name="valor_unitario[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="subtotal" name="subtotal[]">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="text" class="form-control" id="producto" name="producto[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="cantidad" name="cantidad[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="valor_unitario" name="valor_unitario[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="subtotal" name="subtotal[]">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="text" class="form-control" id="producto" name="producto[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="cantidad" name="cantidad[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="valor_unitario" name="valor_unitario[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="subtotal" name="subtotal[]">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="text" class="form-control" id="producto" name="producto[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="cantidad" name="cantidad[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="valor_unitario" name="valor_unitario[]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="subtotal" name="subtotal[]">
                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <p class="h4">Total:</p>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="total" name="total">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cancelado" id="flexRadioDefault1" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Cancelado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cancelado" id="flexRadioDefault2" checked value="false">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Pendiente por Pagar
                    </label>
                </div>

                <input type="submit" class="btn btn-success mt-3" value="Emitir Factura">
            </form>
        </div>
    </div>
</div>
@endsection