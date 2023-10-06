<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectivaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directiva', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->integer('anio');
            $table->string('pastor')->nullable();
            $table->unsignedBigInteger('id_tipo_directiva')->nullable();
            $table->foreign('id_tipo_directiva')->references('id')->on('tipo_directiva');
            $table->string('presidente')->nullable();
            $table->string('vicepresidente')->nullable();
            $table->string('secretario')->nullable();
            $table->string('tesorero')->nullable();
            $table->string('vocal1')->nullable();
            $table->string('vocal2')->nullable();
            $table->string('vocal3')->nullable();
            $table->boolean('directiva_actual'); //ACTUAL = 1, NO ES ACTUAL = 0
            $table->boolean('estado')->default(false); //Inactivo = 0, Activo = 1
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
        Schema::dropIfExists('directiva');
    }
}
