<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_vehiculos', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('vehiculo_id');
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            $table->primary(['customer_id','vehiculo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_vehiculos');
    }
}
