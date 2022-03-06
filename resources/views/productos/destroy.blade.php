@extends('layout')
@section('title','Todos los productos')
@section('contenido')


<div class="col-12 mx-auto my-5">
    <h1>Eliminar un Producto</h1>
    <div class="alert alert-danger" role="alert">
        Estas seguro de eliminar este registro!!!
        <table class="table table-sm table-hover table-bordered" style="background-color: white">
            <thead>
                <th>Descripción</th>
                <th>Precio</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->apellido }}</td>
                    <td>{{ $producto->precio }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
        @csrf
        @method('DELETE')        
            <a href="{{ route("productos.index") }}" class="btn btn-info" >
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
            <button class="btn btn-danger">
                <span class="fas fa-user-times"></span> Eliminar 
            </button>
        </form>
    </div>
</div>
@endsection
 