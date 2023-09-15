@extends('layout/plantilla')

@section('tituloPagina', 'Pacientes')

@section('contenido')
<div class="card">
    <h5 class="card-header">Laboratorios Clinicos</h5>
    <div class="card-body">        
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif

                
            </div>
        </div>
        <h5 class="card-title text-center">Pacientes</h5>
        <p>
            <a href="{{ route("pacientes.create") }}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar nuevo paciente
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>Fecha de Ingreso</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->edad }}</td>
                            <td>{{ $item->genero }}</td>
                            <td>{{ $item->fecha_ingreso }}</td>
                            <td>
                                <form action="{{ route("pacientes.edit", $item->id_paciente) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("pacientes.show", $item->id_paciente) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>                           
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                
            </div>
          
        </p>
    </div>
</div>
@endsection