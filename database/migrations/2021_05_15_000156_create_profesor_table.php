<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('apellido_paterno', 255);
            $table->string('apellido_materno', 255);
            $table->foreignId('departamento_id')->references('id')->on('departamento');
            $table->string('email', 255);
            $table->string('telefono', 255);
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
        Schema::dropIfExists('profesor');
    }
}
