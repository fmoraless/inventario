<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_comprobante', 20)->nullable();
            $table->string('serie_comprobante', 7);
            $table->string('num_comprobante', 10)->nullable();
            $table->dateTime('fecha_hora')->nullable();
            $table->decimal('impuesto', 10, 0)->nullable();
            $table->decimal('total', 10, 0)->nullable();
            $table->string('estado', 20)->nullable();
            $table->timestamps();
            $table->integer('supplier_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
