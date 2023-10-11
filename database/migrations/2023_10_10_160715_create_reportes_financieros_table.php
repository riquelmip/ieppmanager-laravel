<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesFinancierosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_financieros', function (Blueprint $table) {
            $table->id();
            $table->string('mes');
            $table->integer('anio');
            $table->unsignedBigInteger('id_directiva')->nullable();
            $table->foreign('id_directiva')->references('id')->on('directiva');
            $table->unsignedBigInteger('id_tipo_reporte_financiero')->nullable();
            $table->foreign('id_tipo_reporte_financiero')->references('id')->on('tipo_reporte_financiero');
            $table->double('total_entradas')->nullable();
            $table->double('total_saldo_mes_anterior')->nullable();
            $table->double('total_diezmo_entradas')->nullable();
            $table->double('total_salidas')->nullable();
            $table->double('total_saldo_mes_actual_disponible')->nullable();
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
        Schema::dropIfExists('reportes_financieros');
    }
}
