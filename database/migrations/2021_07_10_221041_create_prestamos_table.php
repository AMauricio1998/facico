<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('num_cuenta', 10);
            $table->string('email');
            $table->bigInteger('licenciatura_id')->unsigned()->nullable();
            $table->text('insumo');
            $table->date('fecha_pres');
            $table->time('hora_pres');
            $table->date('fecha_dev');
            $table->time('hora_dev');
            $table->string('activo');
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
        Schema::dropIfExists('prestamos');
    }
}
