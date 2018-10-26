<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    public $table = "jugadores";

    public $fillable = ["nombre", "magia", "tiro", "pases", "velocidad", "marca", "resistencia", "ataque", "defensa"];

    public function posiciones(){
    	return $this->belongsToMany(Posicion::class, 'jugador_posiciones', 'jugador_id', 'posicion_id');
    }
}
