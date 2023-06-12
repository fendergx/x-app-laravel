@extends('base.base')
@section('title')
Proyectos
@endsection
@section('contenido')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
       <div class="pull-left">
        <h1>Proyectos</h1>
       </div>
       <div class="pull-right">
          <a class="btn btn-success" href="{{ route('proyectos.create') }}">Crear proyecto</a> &nbsp;
       </div>
    </div>
 </div>
 <br>

 @if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
 
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
       <tr>
          <th>No.</th>
          <th>Nombre</th>
          <th>Fuente fondos</th>
          <th>$ Planificado</th>
          <th>$ Patrocinado</th>
          <th>$ Fondos propios</th>
          <th width="280px">Acciones</th>
       </tr>
    </thead>
    
   <tbody>
       @foreach ($proyectos as $x)
           <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $x->nombre_proyecto }}</td>
              <td>{{ $x->fuente_fondos }}</td>
              <td>{{ $x->monto_planificado }}</td>
              <td>{{ $x->monto_patrocinado }}</td>
              <td>{{ $x->monto_fondos_propios }}</td>
              <td>
               <div class="btn-group" role="group" aria-label="botones-en-linea">
                    <a class="btn btn-primary" href="{{ route('proyectos.edit',$x->id) }}">Editar</a>&nbsp;
                    <form action="{{ route('proyectos.destroy',$x->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
               </div>
                </td>
           </tr>
       @endforeach
    </tbody>
</table>
 
<div class="row h-100 justify-content-center align-items-center"> 
   {!! $proyectos->links('pagination::bootstrap-4') !!}
</div>

@endsection