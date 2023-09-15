@extends('layout/plantilla')

@section("tituloPagina", "Nuevo Registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar Laboratorio</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('pruebasm.store') }}" method="POST">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Tipo de Laboratorio</label>
                <input type="text" name="tipo" class="form-control" required>
                <label for="">Costo</label>
                <input type="text" name="costo" class="form-control" required>
                <label for="">Entrega de Resultados</label>
                <input type="date" name="tiempo_resultado" class="form-control" required>
                <br>
                <a href="{{ route("pruebasm.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection


