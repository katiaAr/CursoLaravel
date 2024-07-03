@extends('layouts.app')

@section('content')
<h1>Modificar Grupo</h1>
<form action="{{ route('grupos.update', $grupo->id) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre"
            value="{{ $grupo->nombre }}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion"
            value="{{ $grupo->descripcion }}" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <button type="sumit" class="btn btn-primary">Modificar</button>
            <a href="{{ route('grupos.index') }}" class="btn btn-secundary">Cancelar</a>
        </div>
    </div>
</form>
@endsection
