<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ac_titulo');
            $table->string('ac_descripcion');
            $table->date('ac_fecha_programada');
            $table->unsignedInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedInteger('estados_id')->unsigned();
            $table->foreign('estados_id')->references('id')->on('estadosActividad');
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
        Schema::dropIfExists('actividades');
    }
}
