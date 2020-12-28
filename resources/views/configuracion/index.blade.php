@extends('layouts.plantilla')
@section('nav')
<p class="h3 ml-4">Configuración</p>
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
                <h3 class="panel-title">Usuario</h3>
            </div>
            <div class="panel-body m-auto">					
                <div class="table-container">
                    {!! Form::open(['route' => array('configuracion.update', Auth::User()->id), 'method' => 'post', 'role'=>'form', 'files' =>true]) !!}
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <p>Nombre de usuario<input type="text" name="nombre_user" id="nombre_user" class="form-control input-sm" value="{{Auth::User()->name}}"></p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <p>Nombre del equipo<input type="text" name="equipo_user" id="equipo_user" class="form-control input-sm" value="{{Auth::User()->equipo}}"></p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <p>Escudo: <input name="file" id="file" type="file" accept="image/*" class="form-control-file"></p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-xs-6 col-sm-6 col-md-6">
                               <input type="submit"  value="Editar" class="btn btn-success btn-block">
                           </div>

                       </div>
                    {!! Form::close() !!} 
                </div>
            </div>

        </div>
        
    </div>

</div>

@endsection