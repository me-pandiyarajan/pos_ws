<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewEstimationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('new_estimation', function(Blueprint $table) {
			$table->increments('estimate_id');
			$table->string('estimate_name', 225)->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated_date')->nullable();
			$table->boolean('status')->nullable();
			$table->integer('estimate_no_product')->nullable();
			$table->integer('created_by')->unsigned();
			$table->integer('last_updated_by')->unsigned()->nullable();
			$table->integer('supplier_id')->nullable()->index('`fk_New_Estimation_suppliers1_idx`');
			$table->integer('flag');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('new_estimation');
	}

}
