@extends('layout/plantilla')

@section("tituloPagina", "Actualizar Registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar Resultados</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('resultados.update', $resultados->id_resultado) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Codigo Paciente</label>
                <input type="text" name="id_paciente" class="form-control" required value="{{$resultados->id_paciente}}">
                <label for="">Codigo Laboratorio</label>
                <input type="text" name="id_prueba" class="form-control" required value="{{$resultados->id_prueba}}">
                <label for="">Entrega de Resultado</label>
                <input type="date" name="fecha_resultado" class="form-control" required value="{{$resultados->fecha_resultado}}">
                <label for="">Resultado</label>
                <input type="text" name="resultado" class="form-control" required value="{{$resultados->resultado}}">
                <br>
                <a href="{{ route("resultados.index") }}" class="btn btn-info" >
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


