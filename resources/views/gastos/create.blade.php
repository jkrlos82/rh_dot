@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" action="/gastos/list">
                @csrf
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Fecha:</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-2">
                        <label for="" class="col-sm-2 col-form-label">Concepto:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="concepto" name="concepto">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Valor:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="valor" name="valor">
                        </div>
                    </div>
                </div>

                <input type="submit" class="btn btn-success mt-3" value="Crear Gasto">
            </form>
        </div>
    </div>
</div>
@endsection