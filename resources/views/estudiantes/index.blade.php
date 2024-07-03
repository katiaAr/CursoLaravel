@extends('layouts.app')

@section('content')
<h1>Lista Estudiantes </h1>
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('estudiantes.index') }}" method="GET">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="sumit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('estudiantes.create') }}" class="btn btn-secundary">Ir a crear</a>
             </div>
        </div>
    </form>

    <table class="table table-striper">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Pin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->apellido }}</td>
                <td>{{ $estudiante->email }}</td>
                <td>{{ $estudiante->pin}}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-warning">Editar</a> |
                        </td>
                        <td>
                            <a href="{{ route('estudiantes.show', $estudiante->id) }}" class="btn btn-info">Mostrar</a>  |
                        </td>
                        <td>
                            <a href="{{ route('estudiantes.delete', $estudiante->id) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{ $estudiantes->links() }}
        </div>
    </div>
@endsection
