<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipoVehiculo_id');
            $table->unsignedBigInteger('station_id');
            $table->string('descripcion');
            $table->string('imagen');
//            $table->unsignedBigInteger('disponible');
            $table->timestamps();
            $table->foreign('tipoVehiculo_id')->references('id')->on('tipo_vehiculos');
            $table->foreign('station_id')->references('id')->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
