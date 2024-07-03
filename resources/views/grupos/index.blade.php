@extends('layouts.app')

@section('content')
<h1>Lista Grupos</h1>
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('grupos.index') }}" method="GET">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="sumit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('grupos.create') }}" class="btn btn-secundary">Ir a crear</a>
             </div>
        </div>
    </form>

    <table class="table table-striper">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $grupo)
            <tr>
                <td>{{ $grupo->nombre }}</td>
                <td>{{ $grupo->descripcion }}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('grupos.edit', $grupo->id) }}" class="btn btn-warning">Editar</a> |
                        </td>
                        <td>
                            <a href="{{ route('grupos.show', $grupo->id) }}" class="btn btn-info">Mostrar</a>  |
                        </td>
                        <td>
                            <a href="{{ route('grupos.delete', $grupo->id) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{ $grupos->links() }}
        </div>
    </div>
@endsection
