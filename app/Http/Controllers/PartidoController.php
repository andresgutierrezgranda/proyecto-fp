<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadors=Jugador::orderBy('id', 'DESC')->paginate(3);
        return view('partido.index', ['jugadors' => Jugador::all()->where('id_users', auth()->id())]);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugadors=Jugador::find($id);
        return view('partido.edit', compact('jugadors'));
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
        $jugadors=Jugador::find($id);
        $this->validate($request,['minutos'=>'required', 'goles'=>'required', 'asistencias'=>'required']);
        if (request('titular') == 'si') {
            $jugadors->titular +=1;
        }
        if (request('titular') == 'no') {
            $jugadors->suplente +=1;
        }
        if (request('amarilla') + request('amarilla2')== 2) {
            $jugadors->dobleama +=1;
        }elseif (request('amarilla') + request('amarilla2')== 1) {
            $jugadors->amarillas +=1;
        }
        if (request('amarilla') + request('amarilla2')== 2 && request('roja')== 1) {
            $jugadors->dobleama +=1;
        }elseif (request('amarilla') + request('amarilla2')== 1 && request('roja')== 1) {
            $jugadors->amarillas +=1;
            $jugadors->rojas +=1;
        }elseif (request('roja')== 1) {
            $jugadors->rojas +=1;
        }
        $jugadors->minutos += request('minutos');
        $jugadors->goles += request('goles');
        $jugadors->asistencias += request('asistencias');
        $jugadors->save();
        //Jugador::find($id)->update($request->all());
        return redirect()->route("partido.index")->with('success','Registro actualizado');
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
