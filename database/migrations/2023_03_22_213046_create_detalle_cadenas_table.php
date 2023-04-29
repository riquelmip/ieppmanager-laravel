<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCadenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_cadenas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cadena')->nullable(); //Referencia a la cadena que pertenece
            $table->foreign('id_cadena')->references('id')->on('cadenas');
            $table->unsignedBigInteger('id_coro')->nullable(); //Referencia al coro que irá e la cadena
            $table->foreign('id_coro')->references('id')->on('coros');
            $table->integer('numero')->nullable();
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
        Schema::dropIfExists('detalle_cadenas');
    }
}
