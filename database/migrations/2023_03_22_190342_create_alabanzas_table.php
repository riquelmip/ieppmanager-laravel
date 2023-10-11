<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlabanzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alabanzas', function (Blueprint $table) {
            $table->id();
            $table->boolean('tipo_alabanza')->default(false); //Himnario = 0, Cancionero = 1
            $table->integer('numero_himnario')->nullable(); //Numero de pagina del himnario, y para cancionero num correlativo
            $table->string('nombre')->unique(); //Nombre de la alabanza
            $table->string('slug')->unique(); //Slug de la alabanza
            $table->unsignedBigInteger('id_autor')->nullable(); //Referencia al autor de la alabanza
            $table->foreign('id_autor')->references('id')->on('autor');
            $table->text('letra'); //Letra de la alabanza
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
        Schema::dropIfExists('alabanzas');
    }
}
