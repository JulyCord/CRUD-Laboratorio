@extends('layout/plantilla')

@section("tituloPagina", "Eliminar registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar pacientes</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¿Seguro que quieres eliminar este registro?

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>Fecha de Ingreso</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $pacientes->nombre }}</td>
                            <td>{{ $pacientes->edad }}</td>
                            <td>{{ $pacientes->genero }}</td>
                            <td>{{ $pacientes->fecha_ingreso }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('pacientes.destroy', $pacientes->id_paciente) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("pacientes.index") }}" class="btn btn-info" >
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


