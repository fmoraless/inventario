<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->double('precio')->nullable();
            $table->string('imagen');
            $table->text('description');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->timestamps();
            $table->unsignedInteger('product_uom_id')->nullable()->index('products_product_uom_id_foreign');
            $table->integer('stock_cur')->nullable();
            $table->integer('stock_min')->nullable();
            $table->date('expiry_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
