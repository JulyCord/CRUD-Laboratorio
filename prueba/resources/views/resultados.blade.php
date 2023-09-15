@extends('layout/plantilla')

@section('tituloPagina', 'Resultados Laboratorio')

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
        <h5 class="card-title text-center">Resultados</h5>
        <p>
            <a href="{{ route("resultados.create") }}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Registrar Resultados
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Codigo Paciente</th>
                        <th>Codigo Laboratorio</th>
                        <th>Entrega de Resultado</th>
                        <th>Resultado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->id_paciente }}</td>
                            <td>{{ $item->id_prueba }}</td>
                            <td>{{ $item->fecha_resultado }}</td>
                            <td>{{ $item->resultado }}</td>
                            <td>
                                <form action="{{ route("resultados.edit", $item->id_resultado) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("resultados.show", $item->id_resultado) }}" method="GET">
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