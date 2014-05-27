<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstimatedProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimated_product', function(Blueprint $table) {
			$table->increments('temp_product_id');
			$table->string('product_name', 45)->nullable();
			$table->string('quantity', 50)->nullable();
			$table->string('design_name', 45)->nullable();
			$table->string('description', 45)->nullable();
			$table->string('dimensions', 45)->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated_date')->nullable();
			$table->boolean('Ifref')->nullable();
			$table->integer('product_id')->nullable();
			$table->integer('Delivery_Quality')->nullable();
			$table->integer('Damaged_Quality')->nullable();
			$table->string('Delivery_Comments', 225)->nullable();
			$table->integer('estimate_id')->unsigned()->index('`fk_estimated_product_new_estimation1_idx`');
			$table->integer('created_by')->unsigned()->index('`fk_Estimated_users1_idx1`');
			$table->integer('last_updated_by')->unsigned()->nullable()->index('`fk_Estimated_users2_idx2`');
			$table->integer('order_product');
			$table->integer('delivery_status');
			$table->string('product_sku', 225)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estimated_product');
	}

}
