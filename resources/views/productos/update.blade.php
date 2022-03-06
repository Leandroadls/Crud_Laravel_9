@extends('layout')
@section('title','Todos los productos')
@section('contenido')

<div class="col-12 mx-auto my-5">
    <h1>Editar Producto</h1>
    <form action=" {{ route('productos.update', $producto->id)}} " method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="ingrese un nombre" name="nombre" required value="{{$producto->nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label"> Descripción </label>
            <textarea class="form-control" id="descripcion" rows="3" name="descripcion" required value="{{$producto->descripcion}}"></textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" min="0" step="0.1" class="form-control" id="precio" name="precio" required value="{{$producto->precio}}" />
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-info" >
            <span class="fas fa-undo-alt"></span> Regresar
        </a>
    </form>
</div>
@endsection