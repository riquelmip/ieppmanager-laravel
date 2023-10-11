<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coros', function (Blueprint $table) {
            $table->id();
            $table->boolean('tipo_coro')->default(false); //Avivamiento = 0, Adoracion = 1
            $table->string('nombre')->unique(); //Nombre del coro
            $table->string('slug')->unique(); //Slug 
            $table->unsignedBigInteger('id_autor')->nullable(); //Referencia al autor de la alabanza
            $table->foreign('id_autor')->references('id')->on('autor');
            $table->text('letra'); //Letra de la alabanza
            $table->string('nota')->nullable(); //Nota en la que sale mejor al grupo de alabanza, Ojo: Esto solo puede ser visto a quienes tendran el rol de Grupo de Alabanza
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
        Schema::dropIfExists('coros');
    }
}
