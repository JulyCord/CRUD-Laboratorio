@extends('layout/plantilla')

@section('tituloPagina', 'Laboratorios Clinicos')

@section('contenido')
<div class="card">
    <h5 class="card-header">CRUD Laravel</h5>
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
        <h5 class="card-title text-center">Laboratorios</h5>
        <p>
            <a href="{{ route("pruebasm.create") }}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar Laboratorio
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Tipo de Laboratorio</th>
                        <th>Costo</th>
                        <th>Entrega de Resultado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->tipo }}</td>
                            <td>Q. {{ $item->costo }}</td>
                            <td>{{ $item->tiempo_resultado }}</td>
                            <td>
                                <form action="{{ route("pruebasm.edit", $item->id_prueba) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("pruebasm.show", $item->id_prueba) }}" method="GET">
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