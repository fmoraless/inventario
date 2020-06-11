<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('purchase_id')->nullable();
			$table->integer('product_id')->nullable();
			$table->float('quantity', 10, 0)->nullable();
			$table->decimal('price', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_details');
	}

}
