<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        //$jugadors=Jugador::orderBy('id', 'DESC')->paginate(8);
        return view('bienvenido', ['jugadors' => Jugador::all()->where('id_users', auth()->id())]);
    }
}
