<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('configuracion.index');
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
        $jugadors=User::find($id);
        $this->validate($request,[ 'nombre_user'=>'required|regex:/^[\pL\s\-]+$/u']);
        $jugadors->name = request('nombre_user');
        $jugadors->equipo = request('equipo_user');
        if ($request->file('file') == "") {
            if ($jugadors->ruta != "Sin imagen") {

            }else {
               $jugadors->ruta = "Sin imagen"; 
            }
            
        }else {
            if ($jugadors->ruta == "Sin imagen") {
                $rand=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10000);
                $request->file('file')->move(public_path().'/images/', $rand.$request->file('file')->getClientOriginalName());
                $jugadors->ruta = $rand.$request->file('file')->getClientOriginalName();
            }else {
                unlink("images/".User::find($id)->ruta);
                $rand=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10000);
                $request->file('file')->move(public_path().'/images/', $rand.$request->file('file')->getClientOriginalName());
                $jugadors->ruta = $rand.$request->file('file')->getClientOriginalName();
            }                
        }
        //Jugador::find($id)->update($request->all());
        $jugadors->save();
        return redirect()->route("configuracion.index")->with('success','Datos del usuario actualizados');
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
