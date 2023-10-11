<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_directiva')->nullable();
            $table->foreign('id_directiva')->references('id')->on('directiva');
            $table->boolean('tipo'); // 0 = Espirituales, 1 = Materiales
            $table->string('proyecto')->nullable();
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('id_acta')->nullable();
            $table->foreign('id_acta')->references('id')->on('actas');
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
        Schema::dropIfExists('proyectos');
    }
}
