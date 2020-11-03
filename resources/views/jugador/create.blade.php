@extends('layouts.plantilla')
@section('nav')
<p class="h3 ml-4">Plantilla</p>
@endsection
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
					<h3 class="panel-title">Jugador</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						{!! Form::open(['route' => 'jugador.store', 'method' => 'post', 'role'=>'form', 'files' =>true]) !!}
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										{!! Form::text('nombre', null, ['class' => 'form-control input-sm' , 'required' => 'required', 'placeholder'=>'Nombre']) !!}
									</div>

									
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">

									{!! Form::text('apellidos', null, ['class' => 'form-control input-sm' , 'required' => 'required', 'placeholder'=>'Apellidos']) !!}
								</div>
							</div>	
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">

									{!! Form::number('edad', null, ['class' => 'form-control input-sm' , 'required' => 'required', 'placeholder'=>'Edad']) !!}
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">

									{!! Form::select('posicion', ['POR' => 'POR', 'DEF' => 'DEF', 'MED' => 'MED', 'DEL' => 'DEL'], null, ['class' => 'form-control' ]) !!}
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>Imagen: <input type="file" name="file" accept="image/*" class="form-control-file" /></p>
								</div>
							</div>
							<div class="row"> 
 								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Crear" class="btn btn-success btn-block">
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