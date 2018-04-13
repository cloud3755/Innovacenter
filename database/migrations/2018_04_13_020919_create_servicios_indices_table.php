<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_indices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 50);
            $table->string('descripcion', 400);
            $table->string('imagen', 100);
            $table->boolean('activo');
            //$table->timestamps();
        });
        //Schema::rename('servicios_indices', 'ServiciosIndex');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_indices');
    }
}
