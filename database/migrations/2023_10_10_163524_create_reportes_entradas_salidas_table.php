<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesEntradasSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_entradas_salidas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_reporte_financiero')->nullable();
            $table->foreign('id_reporte_financiero')->references('id')->on('reportes_financieros');
            $table->boolean('tipo'); // 0 = Entradas, 1 = Salidas
            $table->string('nombre')->nullable();
            $table->double('total')->nullable();
            $table->text('descripcion')->nullable();
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
        Schema::dropIfExists('reportes_entradas_salidas');
    }
}
