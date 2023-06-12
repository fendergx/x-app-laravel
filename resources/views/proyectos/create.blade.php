@extends('base.base')
@section('title')
Crear proyecto
@endsection
@section('contenido')

<div class="row">
    <div class="col-lg-12 margin-tb">
       <div class="pull-left">
          <h2>Crear proyecto</h2>
       </div>
       <div class="pull-right">
          <a class="btn btn-secondary" href="{{ route('proyectos.index') }}"> Regresar</a>
       </div>
    </div>
 </div>
  
 @if ($errors->any())
 <div class="alert alert-danger">
    <strong>holas!</strong> Has causado un error.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
    </ul>
 </div>
 @endif
  
 <form action="{{ route('proyectos.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre_proyecto" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fuente fondos:</strong>
                <input type="text" name="fuente_fondos" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Monto planificado:</strong>
                <input type="number" step=".01" name="monto_planificado" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Monto patrocinado:</strong>
                <input type="number" step=".01" name="monto_patrocinado" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Monto fondos propios:</strong>
                <input type="number" step=".01" name="monto_fondos_propios" class="form-control">
            </div>
        </div>
     
       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Crear</button>
       </div>
    </div>
 </form>

@endsection