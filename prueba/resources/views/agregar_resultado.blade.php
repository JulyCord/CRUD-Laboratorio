@extends('layout/plantilla')

@section("tituloPagina", "Nuevo Registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar Resultados</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('resultados.store') }}" method="POST">
                @csrf
                <label for="">Codigo Paciente</label>
                <input type="text" name="id_paciente" class="form-control" required>
                <label for="">Codigo Laboratorio</label>
                <input type="text" name="id_prueba" class="form-control" required>
                <label for="">Entrega de Resultado</label>
                <input type="date" name="fecha_resultado" class="form-control" required>
                <label for="">Resultado</label>
                <input type="text" name="resultado" class="form-control" required>
                <br>
                <a href="{{ route("resultados.index") }}" class="btn btn-info" >
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


