<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre', 191);
            $table->float('precio', 10, 0)->nullable();
            $table->string('imagen', 191);
            $table->text('description', 65535);
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->timestamps();
           // $table->integer('product_uom_id')->nullable();


            $table->unsignedInteger('product_uom_id')->nullable();
            $table->foreign('product_uom_id')
                ->references('id')
                ->on('product_uoms')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }

}
