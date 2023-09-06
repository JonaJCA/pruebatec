@extends('layouts.plantilla')

@section('title', 'Producto - ' .$prueba->nombre)

@section('content')
<h1>Producto registrado: {{$prueba->nombre}}</h1>
<a href="{{route('prueba.index')}}" class="btn btn-success" role="button">Volver a Listado</a><br>
<a href="{{route('prueba.edit', $prueba)}}" class="btn btn-primary" role="button">Editar producto</a>

<p><strong>Cantidad:</strong>{{$prueba->cantidad}}</p>
<p><strong>Descripción:</strong>{{$prueba->descripcion}}</p>
<br>
<form action="{{route('prueba.destroy', $prueba)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-primary">Eliminar</button>
</form>

@endsection