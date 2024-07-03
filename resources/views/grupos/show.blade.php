@extends('layouts.app')

@section('content')
<h1>Ver Grupo</h1>

    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre"
            value="{{ $grupo->nombre }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion"
            disabled> {{ $grupo->descripcion }}</textarea>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('grupos.index') }}" class="btn btn-secundary">Regresar</a>
        </div>
    </div>
@endsection
