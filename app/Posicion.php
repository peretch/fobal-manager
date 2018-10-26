<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    public $table = "posiciones";

    public $fillable = ["nombre", "descripcion"];
}
