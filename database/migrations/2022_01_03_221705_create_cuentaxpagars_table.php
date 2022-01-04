<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaxpagarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentaxpagars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factura_compra_id');
            $table->date('fecha_pago');
            $table->string('estado');
            $table->integer('saldo');
            $table->integer('valor_total');
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
        Schema::dropIfExists('cuentaxpagars');
    }
}
