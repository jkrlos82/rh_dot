@extends('layouts.base')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Producto</th>
            <th scope="col">Referencia</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor promedio</th>



        </tr>
    </thead>
    <tbody>
        @if(isset($productos->categorias))
        @foreach($productos->categorias as $producto)
        <tr>
            <th scope="row">{{$productos->id}}</th>
            <td>{{$productos->nombre}}</td>
            <td>{{$producto->nombre_categoria}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->valor_promedio}}</td>
            @endforeach
            @endif

            @if (session('notice'))
            <div class="alert alert-success">
                {{ session('notice') }}
            </div>
            @endif
    </tbody>
</table>
@endsection