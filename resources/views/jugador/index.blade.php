@extends('layouts.plantilla')
@section('nav')
<p class="h3 ml-4">Plantilla</p>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-1 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <p><a href="{{ route('jugador.create') }}" class="btn btn-info" ><i class="fas fa-plus"></i></a> Añadir jugador</p>

          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
                <th>Pos.</th>
               <th>Nombre</th>
               <th>Apellidos</th>
               <th class="d-none d-sm-table-cell">Edad</th>
               <th class="d-none d-sm-table-cell">Minutos</th>
               <th class="d-none d-sm-table-cell">Goles</th>
               <th class="d-none d-sm-table-cell">Asistencias</th>
             </thead>
             <tbody>
              @if($jugadors->count())  
              @foreach($jugadors as $jugador)  
              <tr>
                <td>{{$jugador->posicion}}</td>
                <td>{{$jugador->nombre}}</td>
                <td>{{$jugador->apellidos}}</td>
                <td class="d-none d-sm-table-cell">{{$jugador->edad}}</td>
                <td class="d-none d-sm-table-cell">{{$jugador->minutos}}</td>
                <td class="d-none d-sm-table-cell">{{$jugador->goles}}</td>
                <td class="d-none d-sm-table-cell">{{$jugador->asistencias}}</td>
                <td><a class="btn btn-success btn-xs" href="{{action('JugadorController@show', $jugador->id)}}" ><i class="fas fa-eye"></i></a></td>
                <td><a class="btn btn-primary btn-xs" href="{{action('JugadorController@edit', $jugador->id)}}" ><i class="fas fa-pencil-alt"></i></a></td>
                <td>
                  <form action="{{action('JugadorController@destroy', $jugador->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-trash"></i></button></form>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="12" class="text-center">Sin registros</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
    </div>
  </div>
 
@endsection