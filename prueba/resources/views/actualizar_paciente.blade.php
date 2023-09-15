@extends('layout/plantilla')

@section("tituloPagina", "Actualizar Registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar paciente</h5>
    <div class="card-body">
        
        <p class="card-text">
        <form action="{{ route('pacientes.update', $pacientes->id_paciente) }}" method="POST">            
                @csrf
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$pacientes->nombre}}">
                <label for="">Edad</label>
                <input type="text" name="edad" class="form-control" required value="{{$pacientes->edad}}">
                <label for="">Genero</label>
                <input type="text" name="genero" class="form-control" required value="{{$pacientes->genero}}">
                <label for="">Fecha de Ingreso</label>
                <input type="date" name="fecha_ingreso" class="form-control" required value="{{$pacientes->fecha}}">
                <br>
                <a href="{{ route("pacientes.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-plus"></span> Actualizar
                </button>
                
        </form>            
        </p>
        
    </div>
</div>
@endsection


