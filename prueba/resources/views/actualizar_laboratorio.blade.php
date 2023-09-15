@extends('layout/plantilla')

@section("tituloPagina", "Actualizar Registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar Laboratorio</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('pruebasm.update', $pruebasmedicas->id_prueba) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$pruebasmedicas->nombre}}">
                <label for="">Tipo de Laboratorio</label>
                <input type="text" name="tipo" class="form-control" required value="{{$pruebasmedicas->tipo}}">
                <label for="">Costo</label>
                <input type="text" name="costo" class="form-control" required value="Q. {{$pruebasmedicas->costo}}">
                <label for="">Entrega de Resultados</label>
                <input type="date" name="tiempo_resultado" class="form-control" required value="{{$pruebasmedicas->tiempo_resultado}}">
                <br>
                <a href="{{ route("pruebasm.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection


