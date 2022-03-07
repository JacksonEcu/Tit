<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cedula');
            $table->string('nombreuno');
            $table->string('nombredos');
            $table->string('apellidouno');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('correo');
            $table->string('colegio');
            $table->integer('fechaingreso');
            $table->integer('fechafin');
            $table->string('uni');
            $table->integer('fechainicio');
            $table->integer('fechafinal');
            $table->string('curso');
            $table->integer('fechaini');
            $table->integer('fechafi');
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
        //
    }
};
