<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Jugador;
use App\User;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadors=Jugador::all()->where('id_users', auth()->id());
        return view('jugador.index', compact('jugadors'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jugador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jugadors=new Jugador();
        $this->validate($request,[ 'nombre'=>'required|regex:/^[\pL\s\-]+$/u', 'apellidos'=>'required|regex:/^[\pL\s\-]+$/u', 'edad'=>'required']);
        $jugadors->nombre = request('nombre');
        $jugadors->apellidos = request('apellidos');
        $jugadors->edad = request('edad');
        $jugadors->posicion = request('posicion');
        if ($request->file('file') == "") {
            $jugadors->ruta = "Sin imagen";
        }else {
            $rand=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10000);
            $request->file('file')->move(public_path().'/images/', $rand.$request->file('file')->getClientOriginalName());
            
            $jugadors->ruta = $rand.$request->file('file')->getClientOriginalName();
        }
        $jugadors->id_users = auth()->id();
        //Jugador::create($request->all());

        

        $jugadors->save();
        return redirect()->route('jugador.index')->with('success','Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $jugadors=Jugador::find($id);
        return view('jugador.show', compact('jugadors'));
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
        return view('jugador.edit', compact('jugadors'));
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
            $this->validate($request,[ 'nombre'=>'required|regex:/^[\pL\s\-]+$/u', 'apellidos'=>'required|regex:/^[\pL\s\-]+$/u', 'edad'=>'required']);
            $jugadors->nombre = request('nombre');
            $jugadors->apellidos = request('apellidos');
            $jugadors->edad = request('edad');
            $jugadors->posicion = request('posicion');
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
                    unlink("images/".Jugador::find($id)->ruta);
                    $rand=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10000);
                    $request->file('file')->move(public_path().'/images/', $rand.$request->file('file')->getClientOriginalName());
                    $jugadors->ruta = $rand.$request->file('file')->getClientOriginalName();
                }                
            }
            //Jugador::find($id)->update($request->all());
            $jugadors->save();
            return redirect()->route("jugador.index")->with('success','Registro actualizado');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        if (Jugador::find($id)->ruta == "Sin imagen") {
            Jugador::find($id)->delete();
        }else{
            unlink("images/".Jugador::find($id)->ruta);
            Jugador::find($id)->delete();
        }
        return redirect()->route('jugador.index')->with('success','Registro eliminado');
    }
}
