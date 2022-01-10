@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" action="/clientes/{id}">
                @csrf
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Fecha:</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Cliente:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="cliente" name="cliente">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Identificacion:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="identificacion" name="identificacion">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Contacto:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="contacto" name="contacto">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Telefono:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Direccion:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Ciudad:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="ciudad" name="ciudad">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                </div>

                <input type="submit" class="btn btn-success mt-3" value="Crear cliente">
            </form>
        </div>
    </div>
</div>
@endsection