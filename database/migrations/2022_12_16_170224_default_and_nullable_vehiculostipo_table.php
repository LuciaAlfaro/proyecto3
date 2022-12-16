<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultAndNullableVehiculostipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles_type', function (Blueprint $table) {
            $table->string('nombre')->default('bicicleta')->change();
            $table->boolean('precio')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles_type', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('precio');
    });
}
}
/*$table->string('nombre')->default('bicicleta')->change();
        $table->boolean('precio')->default(0)->change();*/
