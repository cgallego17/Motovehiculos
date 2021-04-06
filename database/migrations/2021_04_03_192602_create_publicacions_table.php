<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('Titulo');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('Tipo');
            $table->string('Color');
            $table->string('Placa');
            $table->string('Cilindraje');
            $table->string('Kilometraje');
            $table->string('Transmision');
            $table->string('Año');
            $table->string('Precio');
            $table->string('Telefono');
            $table->string('Foto');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacions');
    }
}
