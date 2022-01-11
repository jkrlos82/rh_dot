@extends('layouts.base')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ver</th>
            <th scope="col">Modificar</th>

        </tr>
    </thead>
    <tbody>

        @foreach($productos as $producto)
        <tr>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->nombre}}</td>

            <td><a href="/productos/{{$producto->id}}">ver</a></td>
            <td><a href="/productos/{{$producto->id}}/edit">Actualizar Producto</a></td>

        </tr>
        @endforeach

        @if (isset($result))
        @if (isset($result->success))
        <div class="alert alert-success">
            {{$result->success}}
        </div>
        @else
        <div class="alert alert-danger">
            {{$result->error}}
        </div>
        @endif
        @endif
    </tbody>
</table>
@endsection