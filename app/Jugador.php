<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $fillable = ['nombre','apellidos','edad','minutos','goles','asistencias','completados','sustituido', 'amarillas','rojas','posicion','titular','suplente', 'id_users', 'dobleama', 'ruta'];
}
