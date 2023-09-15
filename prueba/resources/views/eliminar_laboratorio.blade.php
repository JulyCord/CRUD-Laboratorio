@extends('layout/plantilla')

@section("tituloPagina", "Eliminar registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Laboratorios</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¿Seguro que quieres eliminar este registro?

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Nombre</th>
                        <th>Tipo de Laboratorio</th>
                        <th>Costo</th>
                        <th>Entrega de Resultado</th>                                                
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $pruebasmedicas->nombre }}</td>
                            <td>{{ $pruebasmedicas->tipo }}</td>
                            <td>Q. {{ $pruebasmedicas->costo }}</td>
                            <td>{{ $pruebasmedicas->tiempo_resultado }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('pruebasm.destroy', $pruebasmedicas->id_prueba) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("pruebasm.index") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar 
                    </button>
                </form>
            </div>
        </p>
        
    </div>
</div>
@endsection


