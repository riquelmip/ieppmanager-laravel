<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadenas', function (Blueprint $table) {
            $table->id();
            $table->boolean('tipo_cadena')->default(false); //Avivamiento = 0, Adoracion = 1
            $table->string('nombre')->unique(); //Nombre de la Cadena
            $table->string('slug')->unique(); //Slug
            $table->string('nota')->nullable(); //Nota en la que sale mejor al grupo de alabanza, Ojo: Esto solo puede ser visto a quienes tendran el rol de Grupo de Alabanza
            $table->unsignedBigInteger('id_usuario')->nullable(); //Referencia al usuario que crea la alabanza
            $table->foreign('id_usuario')->references('id')->on('users');
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
        Schema::dropIfExists('cadenas');
    }
}
