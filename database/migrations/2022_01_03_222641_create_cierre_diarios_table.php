<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCierreDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cierre_diarios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('total_venta');
            $table->integer('total_compra');
            $table->integer('total_gasto');
            $table->integer('ganancia');
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
        Schema::dropIfExists('cierre_diarios');
    }
}
