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
        Schema::create('aprendices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Correo');
            $table->string('Edad');
            $table->integer('ficha_id')->unsigned();
            $table->foreign('ficha_id')->references('id')
            ->on('fichas')
            ->onDelete('cascade');
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
        Schema::dropIfExists('aprendices');
    }
};
