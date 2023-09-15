@extends('layout/plantilla')

@section("tituloPagina", "Eliminar registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Resultados de Laboratorio</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¿Seguro que quieres eliminar este registro?

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Codigo Paciente</th>
                        <th>Codigo Laboratorio</th>
                        <th>Entrega de Resultado</th>
                        <th>Resultado</th>
                    </thead>
                    <tbody>
                        <tr>
                         <td>{{ $resultados->id_paciente }}</td>
                         <td>{{ $resultados->id_prueba }}</td>
                         <td>{{ $resultados->fecha_resultado }}</td>
                        <td>{{ $resultados->resultado }}</td>                            
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('resultados.destroy', $resultados->id_resultado) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("resultados.index") }}" class="btn btn-info" >
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


