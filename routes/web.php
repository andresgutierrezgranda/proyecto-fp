<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::resource('presentacion', 'HomeController')->middleware('auth');

//Route::get('/', 'JugadorController@index')->name('home');
//Route::get('/partidos','JugadorController@index_partido')->middleware('auth');

Route::resource('partido','PartidoController')->middleware('auth');
Route::resource('jugador','JugadorController')->middleware('auth');
Route::resource('configuracion','ConfiguracionController')->middleware('auth');
Route::resource('estadisticas','EstadisticasController')->middleware('auth');
Route::resource('usuarios','UsuariosController')->middleware('auth');

Route::get('/', function () {
    return view('principal');
});
/*Route::get('/partidos/{id}', function (Request $request, $id) {
    $this->validate($request,['minutos'=>'required', 'goles'=>'required', 'asistencias'=>'required']);
        Jugador::find($id)->update($request->all());
        return redirect()->route("partidos.index")->with('success','Registro actualizado');
});