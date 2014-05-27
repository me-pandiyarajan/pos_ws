<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEstimatedProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estimated_product', function(Blueprint $table) {
			$table->foreign('estimate_id')->references('estimate_id')->on('new_estimation');
			$table->foreign('created_by')->references('id')->on('users');
			$table->foreign('last_updated_by')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estimated_product', function(Blueprint $table) {
			$table->dropForeign('estimated_product_estimate_id_foreign');
			$table->dropForeign('estimated_product_created_by_foreign');
			$table->dropForeign('estimated_product_last_updated_by_foreign');
		});
	}

}
