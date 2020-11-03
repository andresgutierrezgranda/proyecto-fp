@extends('layouts.plantilla')
@section('nav')

@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-md-offset-2 text-center">
        <p class="h1">Bienvenido a Team Statistics, {{ Auth::user()->name }}</p>
        <p>Gestiona al {{ Auth::user()->equipo }} de manera eficiente</p>
    </div>
  </div>
 
@endsection