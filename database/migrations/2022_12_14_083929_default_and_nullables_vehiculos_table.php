<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultAndNullablesVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->string('tipo')->default('0')->change();
            $table->boolean('disponible')->default(true)->change();
            $table->string('descripcion')->default('Tremendo ciclo')->change();
            $table->string('imagen')->nullable()->change();
            $table->boolean('roto')->default(false)->change();
            $table->string('desc_rotura')->nullable()->change();
            $table->date('ult_reparacion')->nullable()->change();
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
            $table->string('tipo')->default('0')->change();
            $table->boolean('disponible')->default(true)->change();
            $table->string('descripcion')->default('Tremendo ciclo')->change();
            $table->string('imagen')->nullable()->change();
            $table->boolean('roto')->default(false)->change();
            $table->string('desc_rotura')->nullable()->change();
            $table->date('ult_reparacion')->nullable()->change();
        });
    }
}
