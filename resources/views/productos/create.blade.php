@extends('layouts.base')
<style>
    form {
        width: 900px;
        padding: 16px;
        border-radius: 10px;
        margin: auto;
        background-color: #F0AA69;
    }

    label {
        color: white;
        font-weight: bold;
    }
</style>

@section('content')

</br>
</br>


<h1 style="font: size 20px;" align="center">CREAR PRODUCTO</br></br>
</h1>

<form action="/productos" method="POST" enctype="multipart/form-data" style="width: 900px" padding="16px" border-radius="10px" margin="auto" background-color="#F0AA69">
    @csrf
    <div class="form-group row">
        <label for="producto" class="col-sm-2 col-form-label">Producto</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="producto" name="producto" placeholder="Nombre del producto">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="nombre_categoria" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria[]" placeholder="Nombre categoria">
            </div>
        </div>
        <div class="col-md-3">
            <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cantidad categoria">
            </div>
        </div>

        <div class="col-md-6">
            <label for="valor_promedio" class="col-sm-4 col-form-label">Valor Unitario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="valor_promedio" name="valor_promedio[]" placeholder="Valor unitario categoria">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="nombre_categoria" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria[]" placeholder="Nombre categoria">
            </div>
        </div>
        <div class="col-md-3">
            <label for="cantidad" class="col-sm-2 col-form-label">cantidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cantidad categoria">
            </div>
        </div>

        <div class="col-md-6">
            <label for="valor_promedio" class="col-sm-4 col-form-label">Valor Unitario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="valor_promedio" name="valor_promedio[]" placeholder="Valor unitario categoria">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="nombre_categoria" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria[]" placeholder="Nombre categoria">
            </div>
        </div>
        <div class="col-md-3">
            <label for="cantidad" class="col-sm-2 col-form-label">cantidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cantidad categoria">
            </div>
        </div>

        <div class="col-md-6">
            <label for="valor_promedio" class="col-sm-4 col-form-label">Valor Unitario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="valor_promedio" name="valor_promedio[]" placeholder="Valor unitario categoria">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="nombre_categoria" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria[]" placeholder="Nombre categoria">
            </div>
        </div>
        <div class="col-md-3">
            <label for="cantidad" class="col-sm-2 col-form-label">cantidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cantidad categoria">
            </div>
        </div>

        <div class="col-md-6">
            <label for="valor_promedio" class="col-sm-4 col-form-label">Valor Unitario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="valor_promedio" name="valor_promedio[]" placeholder="Valor unitario categoria">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="nombre_categoria" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria[]" placeholder="Nombre categoria">
            </div>
        </div>
        <div class="col-md-3">
            <label for="cantidad" class="col-sm-2 col-form-label">cantidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cantidad categoria">
            </div>
        </div>

        <div class="col-md-6">
            <label for="valor_promedio" class="col-sm-4 col-form-label">Valor Unitario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="valor_promedio" name="valor_promedio[]" placeholder="Valor unitario categoria">
            </div>
        </div>
        </br>
        </br>
        <p>
            </br>
            <Input type="submit" value="GUARDAR DATOS" /> </br>
        </p>
        </br>

    </div>
</form>



@endsection