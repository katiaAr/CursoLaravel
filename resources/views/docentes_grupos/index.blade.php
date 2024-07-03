@extends('layouts.app')

@section('content')
<h1>Lista Docentes Grupos</h1>
    @if (session('success'))
    <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('docentes_grupos.index') }}" method="GET">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('docentes_grupos.create') }}" class="btn btn-secundary">Ir a crear</a>
            </div>
        </div>
    </form>

    <table class="table table-striper">
        <thead>
            <tr>
                <th>Docentes</th>
                <th>Grupos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentesGrupos as $docenteGrupo)
            <tr>
                <td>{{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}</td>
                <td>{{ $docenteGrupo->grupo->nombre }}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('docentes_grupos.edit', $docenteGrupo->id) }}"
                                class="btn btn-warning">Editar</a> |
                        </td>
                        <td>
                            <a href="{{ route('docentes_grupos.show', $docenteGrupo->id) }}"
                                class="btn btn-info">Mostrar</a> |
                        </td>
                        <td>
                            <a href="{{ route('docentes_grupos.delete', $docenteGrupo->id) }}"
                                class="btn btn-danger">Eliminar</a>
                        </td>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{ $docentesGrupos->links() }}
        </div>
    </div>
@endsection
