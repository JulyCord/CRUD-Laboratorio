@extends('layout/plantilla')

@section("tituloPagina", "Nuevo Registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar paciente</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('pacientes.store') }}" method="POST">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Edad</label>
                <input type="text" name="edad" class="form-control" required>
                <label for="">Genero</label>
                <input type="text" name="genero" class="form-control" required>
                <label for="">Fecha de Ingreso</label>
                <input type="date" name="fecha_ingreso" class="form-control" required>
                <br>
                <a href="{{ route("pacientes.index") }}" class="btn btn-info" >
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


