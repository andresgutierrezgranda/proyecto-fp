@extends('layouts.plantilla')
@section('nav')
<p class="h3 ml-4">Partido</p>
@endsection
@section('content')
<div class="table-container">
    <table id="mytable" class="table table-bordred table-striped">
     <tbody>
      @if($jugadors->count())  
      @foreach($jugadors as $jugador)  
      <tr>
        <td>{{ $jugador->posicion }} {{ $jugador->nombre }} {{ $jugador->apellidos }}</td>
        <td> Paridos convocado: {{ $jugador->titular + $jugador->suplente}}</td>
      </tr>
     <tr>
        <td>

          <form method="POST" action="{{ route('partido.update',$jugador->id) }}" role="form">
            @method('PATCH')
            @csrf
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                <p>Minutos jugados:<input type="number" name="minutos" id="minutos" class=" input-sm" value="0"> Total: {{$jugador->minutos}} min</p>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <p>Titular:
                  <select class="" name="titular" id="titular">
                    <option value="si">Si</option>
                    <option value="no">No</option>
                  </select>
                </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <p>Amarillas: <input type="checkbox" name="amarilla" id="amarilla" value="1"><input type="checkbox" name="amarilla2" id="amarilla2" value="1"> Total: {{$jugador->amarillas}} (Amarillas) /  {{$jugador->dobleama}} (Doble amarilla)</p>                  
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                @if ($jugador->posicion == "POR")
                <p>Goles encajados:<input type="number" name="goles" id="goles" class=" input-sm" value="0"> Total: {{$jugador->goles}}</p>
                @else
                <p>Goles:<input type="number" name="goles" id="goles" class=" input-sm" value="0"> Total: {{$jugador->goles}}</p>
              @endif
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <p>Roja: <input type="checkbox" name="roja" id="roja" value="1"> Total: {{$jugador->rojas}}</p>                  
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <p>Asistencias:<input type="number" name="asistencias" id="asistencias" class=" input-sm" value="0"> Total: {{$jugador->asistencias}}</p>
              </div>
            </div>
            <input type="submit" value="Enviar" class="btn btn-primary">
          </form>
          
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
@endsection