@extends('layouts.plantilla')
@section('nav')
<p class="h3 ml-4">Jugador</p>
@endsection
@section('content')

	  <div class="container">
	    <h2 class="">{{ $jugadors->nombre }} {{ $jugadors->apellidos }}</h2>
        <div class="row">
            <div class="col-md-5 border">
                <p class="h4">Foto</p>
            @if ($jugadors->ruta == "Sin imagen")
                <p class="text-center">Sin foto</p>
            @else
                <img src="{{ asset('images/'.$jugadors->ruta)  }}" alt="" height="250px" class="m-auto">
            @endif
            
            </div>
            <div class="col-md-7 border">
                <p class="h4">Datos personales</p>
                <div class="row">
                    <div class="col-2">
                        <p>Posición: </p>
                    </div>
                    <div class="col">
                        {{$jugadors->posicion}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p>Edad: </p>
                    </div>
                    <div class="col">
                        {{$jugadors->edad}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 border">
                <p class="h4">Estadísticas</p>
                <div class="row">
                    <div class="col-4">
                        <p>Minutos jugados: </p>
                    </div>
                    <div class="col">
                        <span id="min">{{ $jugadors->minutos }}</span>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Minutos/partido: </p>
                    </div>
                    <div class="col">
                        <span id="min_par">0</span>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Goles: </p>
                    </div>
                    <div class="col">
                        <span id="gol">{{ $jugadors->goles }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Goles/partido: </p>
                    </div>
                    <div class="col">
                        <span id="goles_partido"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Asistencias: </p>
                    </div>
                    <div class="col">
                        <span>{{ $jugadors->asistencias }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Partidos convocado: </p>
                    </div>
                    <div class="col">
                        <span id="partidos">0</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Partidos titular: </p>
                    </div>
                    <div class="col">
                        <span id="conv">{{ $jugadors->titular }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>% titular: </p>
                    </div>
                    <div class="col">
                        <span id="porconv"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Partidos suplente: </p>
                    </div>
                    <div class="col">
                        <span id="sup">{{ $jugadors->suplente }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>% suplente: </p>
                    </div>
                    <div class="col">
                        <span id="porsup"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Amarillas: </p>
                    </div>
                    <div class="col">
                        <span id="ama">{{ $jugadors->amarillas }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Rojas: </p>
                    </div>
                    <div class="col">
                        <span id="roj">{{ $jugadors->rojas }}</span>
                    </div>
                </div>
          </div>
        </div>

      </div>
      
@endsection