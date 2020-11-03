@extends('layouts.plantilla')
@section('content')
<div class="row">
		<div class="col-md-12">
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
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Editar a {{ $jugadors->nombre }} {{ $jugadors->apellidos }}</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						{!! Form::open(['route' => array('jugador.update',$jugadors->id), 'method' => 'post', 'role'=>'form', 'files' =>true]) !!}
							@method('PATCH')
							@csrf
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$jugadors->nombre}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="apellidos" id="apellidos" class="form-control input-sm" value="{{$jugadors->apellidos}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="number" name="edad" id="edad" class="form-control input-sm" value="{{$jugadors->edad}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<select class="form-control" name="posicion" id="posicion">
										@if ($jugadors->posicion == "POR")
											<option value="POR" selected>POR</option>
											<option value="DEF">DEF</option>
											<option value="MED">MED</option>
											<option value="DEL">DEL</option>											
										@endif
										@if ($jugadors->posicion == "DEF")
											<option value="POR">POR</option>
											<option value="DEF" selected>DEF</option>
											<option value="MED">MED</option>
											<option value="DEL">DEL</option>											
										@endif
										@if ($jugadors->posicion == "MED")
											<option value="POR">POR</option>
											<option value="DEF">DEF</option>
											<option value="MED" selected>MED</option>
											<option value="DEL">DEL</option>											
										@endif
										@if ($jugadors->posicion == "DEL")
											<option value="POR">POR</option>
											<option value="DEF">DEF</option>
											<option value="MED">MED</option>
											<option value="DEL" selected>DEL</option>											
										@endif
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>Imagen: (Formato .jpeg) <input type="file" name="file" accept="image/jpeg" class="form-control-file" /></p>
								</div>
							</div>
							<div class="row"> 
								<div class="col-xs-12 col-sm-12 col-md-12">
								   <input type="submit"  value="Editar" class="btn btn-success btn-block">
								   <a href="{{ route('jugador.index') }}" class="btn btn-info btn-block" >Atrás</a>
							   </div>

						   </div>
						   {!! Form::close() !!} 
					</div>
				</div>

			</div>
		</div>
</div>
	@endsection