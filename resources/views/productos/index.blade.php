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
        @foreach($producto as $productos)
        <tr>
            <th scope="row">{{$productos->id}}</th>
            <td>{{$productos->nombre}}</td>

            <td><a href="/productos/{{$producto->id}}">ver</a></td>
            <td><a href="/productos/{{$producto->id}}/edit">Actualizar Producto</a></td>

        </tr>
        @endforeach
        @if (session('notice'))
        <div class="alert alert-success">
            {{ session('notice') }}
        </div>
        @endif
    </tbody>
</table>
@endsection