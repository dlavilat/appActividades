@extends('layout.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nueva Actividad</h3>
				</div>
				<div class="panel-body">
					<div class="table-container">
						<form method="POST" action="{{ route('actividades.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                    <label>Título</label>
										<input type="text" name="ac_titulo" id="ac_titulo" class="form-control input-sm" placeholder="Titulo de la actividad">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                    <label>Fecha</label>
										<input type="date" name="ac_fecha_programada" id="ac_fecha_programada" class="form-control input-sm" >
									</div>
								</div>
							</div>

              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                    <label>Categoría</label>
                    <select class="form-control" id="categoria_id" name="categoria_id">
                        <option></option>
                        @foreach($lista_categoria as $lista)
                          <option>{{$lista->ca_descripcion}}</option>
                        @endforeach
                    </select>
									</div>
								</div>
              </div>

							<div class="form-group">
                <label>Descripción</label>
								<textarea name="ac_descripcion" class="form-control input-sm" placeholder="Descripción de la actividad"></textarea>
							</div>

							<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-horizontal">
                    <div class="form-group">
                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                      </div>
                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="{{ route('actividades.index') }}" class="btn btn-info btn-block" >Atrás</a>
                      </div>
    								</div>
                  </div>
                </div>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection
