@extends('layout.layout')

@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Actividades</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('actividades.create') }}" class="btn btn-info" >Añadir Actividad</a>
            </div>
          </div>
          <div class="table-container">
            @if(session()->get('success'))
             <div class="alert alert-success">
               {{ session()->get('success') }}
             </div><br />
           @endif
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Categoria</th>
               <th>Título</th>
               <th>Descripción</th>
               <th>Fecha</th>
               <th>Estado</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
               @if($actividades->count())
               @foreach($actividades as $actividad)
               <tr>
                 <td>{{$actividad->categoria_id}}</td>
                 <td>{{$actividad->ac_titulo}}</td>
                 <td>{{$actividad->ac_descripcion}}</td>
                 <td>{{$actividad->ac_fecha_programada}}</td>
                 <td>{{$actividad->estados_id}}</td>
                 <td><a class="btn btn-primary btn-xs" href="{{action('Actividades@edit', $actividad->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                 <td>
                   <form action="{{action('Actividades@destroy', $actividad->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">

                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                  </td>
                </tr>
                @endforeach
                @else
                <tr>
                 <td colspan="8">No hay registro !!</td>
               </tr>
               @endif
            </tbody>

          </table>
        </div>
      </div>

    </div>
  </div>
</section>
</div>
@endsection
