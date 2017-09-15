<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nome');
            $table->string('tipo');
            $table->string('poder_ataque');
            $table->string('poder_defesa');
            $table->string('agilidade');
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
        Schema::drop('pokemons');
    }
}
