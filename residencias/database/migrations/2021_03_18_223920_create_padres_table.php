<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            
            $table->increments('ID');

            
            $table->string('NombrePadre');
            $table->string('ApaternoPadre');
            $table->string('AmaternoPadre');
            $table->string('NombreAlumno');
            $table->string('ApaternoAlumno');
            $table->string('AmaternoAlumno');
            $table->unsignedInteger('NoCtrl')->unique();
            $table->string('Carrera');

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
        Schema::dropIfExists('padres');
    }
}
