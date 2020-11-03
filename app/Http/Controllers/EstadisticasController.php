<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;
use App\User;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugador=Jugador::all()->where('id_users', auth()->id());
        $gol=-1;
        $gol_jugador;
        $recibidos=100000000000000000000000000000;
        $recibidos_jugador;
        foreach ($jugador as $jugadors) {
            if ($jugadors->posicion == "POR") {
                
                if ($jugadors->goles < $recibidos) {
                    $recibidos_jugador=$jugadors;
                    $recibidos = $jugadors->goles;
                }

            }else{
                if ($jugadors->goles > $gol) {
                    $gol_jugador=$jugadors;
                    $gol = $jugadors->goles;
                }
            }
 
        }
        $asistencias=-10;
        $asistencias_jugador;
        foreach ($jugador as $jugadors) {
            if ($jugadors->asistencias > $asistencias) {
                $asistencias_jugador=$jugadors;
                $asistencias = $jugadors->asistencias;
            }
        }
        $min=0;
        $min_jugador;
        foreach ($jugador as $jugadors) {
            if ($jugadors->minutos > $min) {
                $min_jugador=$jugadors;
                $min = $jugadors->minutos;
            }
        }
        $menos=10000000000000000000000000;
        $menos_jugador;
        foreach ($jugador as $jugadors) {
            if ($jugadors->minutos < $menos) {
                $menos_jugador=$jugadors;
                $menos = $jugadors->minutos;
            }
        }
        $ama=-10;
        $ama_jugador;
        foreach ($jugador as $jugadors) {
            if ($jugadors->amarillas > $ama) {
                $ama_jugador=$jugadors;
                $ama = $jugadors->amarillas;
            }
        }
        $rojas=-10;
        $rojas_jugador;
        foreach ($jugador as $jugadors) {
            if ($jugadors->rojas > $rojas) {
                $rojas_jugador=$jugadors;
                $rojas = $jugadors->rojas;
            }
        }
        $dobleama=-10;
        $dobleama_jugador;
        foreach ($jugador as $jugadors) {
            if ($jugadors->dobleama > $dobleama) {
                $dobleama_jugador=$jugadors;
                $dobleama = $jugadors->dobleama;
            }
        }
        return view('estadisticas.index', compact('gol_jugador', 'asistencias_jugador', 'recibidos_jugador', 'min_jugador', 'menos_jugador','ama_jugador', 'rojas_jugador', 'dobleama_jugador'));
        //['jugadors' => Jugador::all()->where('id_users', auth()->id())]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
