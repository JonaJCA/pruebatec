@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')
<h1>Bienvenido a la página Principal de PRODUCTOS</h1>

<a href="{{route('prueba.create')}}" class="btn btn-primary" role="button">Crear Nuevo</a><br><br>
<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($productos as $item)
        <tr>
            <th scope="row{">{{$item->id}}</th>
            <td><a href="{{route('prueba.show', $item)}}">{{$item->nombre}}</a></td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->cantidad}}</td>
          </tr>
        @endforeach
      
    </tbody>
</table>
@endsection