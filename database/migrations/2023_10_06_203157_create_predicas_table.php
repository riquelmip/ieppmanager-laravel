<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique(); //Nombre de la predica
            $table->string('slug')->unique(); //Slug
            $table->text('descripcion_corta');
            $table->text('descripcion_larga');
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
        Schema::dropIfExists('predicas');
    }
}
