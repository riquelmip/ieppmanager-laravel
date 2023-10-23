<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->boolean('estado')->default(true); //Inactivo = 0, Activo = 1
            $table->boolean('tipo_usuario')->default(false); //General = 0, Directivas = 1
            $table->unsignedBigInteger('id_directiva')->nullable();
            $table->foreign('id_directiva')->references('id')->on('directiva');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
