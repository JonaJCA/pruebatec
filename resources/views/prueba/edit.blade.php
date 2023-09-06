@extends('layouts.plantilla')

@section('title', 'Actualización')

@section('content')
    <h1>Bienvenido a la página donde puedes actualizar un producto</h1>
    <form action="{{route('prueba.update', $prueba)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:<br>
            <input type="text" name="nombre" id="" value="{{old('nombre', $prueba->nombre)}}" class="form-control">
        </label>
        <br>
        <label>
            Descripción:<br>
            <textarea name="descripcion" id="" cols="30" rows="10" class="form-control">{{old('descripcion', $prueba->descripcion)}}</textarea>
        </label>
        <br>
        <label>
            Cantidad:<br>
            <input type="text" name="cantidad" id="" value="{{old('cantidad', $prueba->cantidad)}}" class="form-control" >
        </label>
        <br><br>
        <button type="submit" class="btn btn-primary">Actualizar Fomulario</button>
    </form>
@endsection