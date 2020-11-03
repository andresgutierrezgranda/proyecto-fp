@extends('layouts.plantilla')
@section('nav')
<p class="h3 ml-4">Plantilla</p>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-1 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Equipo</th>
             </thead>
             <tbody>
              @if($users->count())  
              @foreach($users as $user)  
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->equipo}}</td>
                <td>
                  <form action="{{action('UsuariosController@destroy', $user->id)}}" method="post">
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