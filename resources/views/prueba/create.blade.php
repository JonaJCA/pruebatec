@extends('layouts.plantilla')

@section('title', 'Crear Producto')

@section('content')
    <h1>Bienvenido a la página donde puedes crear los Productos</h1>
    <form action="{{route('prueba.store')}}" method="POST">
        @csrf
        <label>
            Nombre:<br>
            <input class="form-control" type="text" name="nombre" id="" value="{{old('nombre')}}">
        </label>
        <br><br>
        <label>
            Descripción:<br>
            <textarea class="form-control" name="descripcion" id="" cols="30" rows="10">{{old('descripcion')}}</textarea>
        </label>
        <br><br>
        <label>
            Cantidad:<br>
            <input class="form-control" type="text" name="cantidad" id="" value="{{old('cantidad')}}">
        </label>
        <br><br>
        <button type="submit" class="btn btn-primary">Enviar Fomulario</button>
    </form>
@endsection
