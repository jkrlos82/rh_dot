@extends('layouts.base')
<style>
    form {
        width: auto;
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
<div class="container-fluid w-75">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title" align="center">MODIFICAR ARTICULO</br></br>
            </h1>

            <form action="{{url('/productos', $producto->id)}}" method="POST" enctype="multipart/form-data" padding="16px" border-radius="10px" margin="auto" background-color="#F0AA69">
                @csrf
                @method('PUT')
                <p>
                    <label for="nombre">PRODUCTO</label></br>
                    <input type="text" name="nombre" size=50 id="nombre" value="{{ $producto->nombre }}" /></br>
                </p>
                <table style="border: double solid 1px #000;" align="center" color="black" width="100%">
                    <thead>
                        <tr>
                            <th>CATEGORIA</th>
                            <th>CANTIDAD</th>
                            <th>PRECIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($producto->categorias as $categoria)

                        <tr>

                            <td>
                                <input type="text" name="id_categoria" size=50 id="id_categoria" value="{{ $categoria->id }}" hidden />
                                <input type="text" name="nombre_categoria" size=50 id="nombre_categoria" value="{{ $categoria->nombre_categoria }}" /></br>
                            </td>
                            <td>
                                <input type="integer" name="cantidad" size=20 id="cantidad" value="{{ $categoria->cantidad }}" /></br>
                            </td>
                            <td>
                                <input type="text" name="valor_promedio" size=20 id="valor_promedio" value="{{ $categoria->valor_promedio }}" /></br>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <Input type="submit" class="mt-3" value="ACTUALIZAR" /> </br>
            </form>
        </div>
    </div>
</div>
@endsection