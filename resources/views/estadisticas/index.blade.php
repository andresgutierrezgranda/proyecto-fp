@extends('layouts.plantilla')
@section('nav')
<p class="h3 ml-4">Estadísticas</p>
@endsection
@section('content')

	  <div class="container">

        <p>Máximo goleador:
            @if (isset($gol_jugador))
              <a href="{{action('JugadorController@show', $gol_jugador->id)}}" class="text-dark">{{$gol_jugador->nombre}}</a> ({{$gol_jugador->goles}} goles)
            @else
                Sin datos
            @endif
            
        </p>
        <p>Máximo asistente:
            @if (isset($asistencias_jugador))
                <a href="{{action('JugadorController@show', $asistencias_jugador->id)}}" class="text-dark">{{$asistencias_jugador->nombre}}</a> ({{$asistencias_jugador->asistencias}} asistencias)
            @else
                Sin datos
            @endif
            
        </p>
        <p>Portero menos goleado:
            @if (isset($recibidos_jugador))
                <a href="{{action('JugadorController@show', $recibidos_jugador->id)}}" class="text-dark">{{$recibidos_jugador->nombre}}</a> ({{$recibidos_jugador->goles}} goles encajados)
            @else
                Sin datos
            @endif
            
        </p>
        <p>Más minutos jugados:
            @if (isset($min_jugador))
                <a href="{{action('JugadorController@show', $min_jugador->id)}}" class="text-dark">{{$min_jugador->nombre}}</a> ({{$min_jugador->minutos}} minutos jugados)
            @else
                Sin datos
            @endif
            
        </p>
        <p>Menos minutos jugados:
            @if (isset($menos_jugador))
                <a href="{{action('JugadorController@show', $menos_jugador->id)}}" class="text-dark">{{$menos_jugador->nombre}}</a> ({{$menos_jugador->minutos}} minutos jugados)
            @else
                Sin datos
            @endif
            
        </p>
        <p>Más tarjetas amarillas:
            @if (isset($ama_jugador))
                <a href="{{action('JugadorController@show', $ama_jugador->id)}}" class="text-dark">{{$ama_jugador->nombre}}</a> ({{$ama_jugador->amarillas}} tarjeta/s amarilla/s)
            @else
                Sin datos
            @endif
            
        </p>
        <p>Más dobles tarjetas amarillas:
            @if (isset($dobleama_jugador))
                <a href="{{action('JugadorController@show', $dobleama_jugador->id)}}" class="text-dark">{{$dobleama_jugador->nombre}}</a> ({{$dobleama_jugador->dobleama}} Dobles amarillas)
            @else
                Sin datos
            @endif
            
        </p>
        <p>Más tarjetas rojas:
            @if (isset($rojas_jugador))
                <a href="{{action('JugadorController@show', $rojas_jugador->id)}}" class="text-dark">{{$rojas_jugador->nombre}}</a> ({{$rojas_jugador->rojas}} tarjeta/s roja/s)
            @else
                Sin datos
            @endif
            
        </p>
      </div>
@endsection