<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesDirectivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_directivas', function (Blueprint $table) {
            $table->id();
            $table->string('dia');
            $table->date('fecha');
            $table->unsignedBigInteger('id_directiva')->nullable();
            $table->foreign('id_directiva')->references('id')->on('directiva');
            $table->string('inicio')->nullable();
            $table->string('alabanzas')->nullable();
            $table->string('coros')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('ofrenda')->nullable();
            $table->double('total_ofrenda')->nullable();
            $table->string('talento')->nullable();
            $table->double('total_talento')->nullable();
            $table->string('alabanza_especial')->nullable();
            $table->string('adoracion')->nullable();
            $table->string('mensaje')->nullable();
            $table->string('aseo')->nullable();
            $table->integer('asis_jovenes')->nullable();
            $table->integer('asis_consejeros')->nullable();
            $table->integer('asis_u_femenil')->nullable();
            $table->integer('asis_pastor')->nullable();
            $table->integer('asis_otros')->nullable();
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
        Schema::dropIfExists('reportes_directivas');
    }
}
