<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoVehiculoEnVehiculosFK extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->bigInteger('vehicles_type_id')->unsigned()->nullable();
            $table->foreign('vehicles_type_id')->references('id')->on('vehicles_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropForeign('vehiculos_vehicles_type_id_foreign');
            $table->dropColumn('vehicles_type_id');
        });
    }
}
