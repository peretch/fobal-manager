<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->increments('id');


            $table->string("nombre");

            $table->integer("magia")->default(1);

            $table->integer("tiro")->default(1);
            $table->integer("pases")->default(1);
            $table->integer("velocidad")->default(1);
            $table->integer("marca")->default(1);
            $table->integer("resistencia")->default(1);
            
            $table->integer("ataque")->default(1);
            $table->integer("defensa")->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
}
