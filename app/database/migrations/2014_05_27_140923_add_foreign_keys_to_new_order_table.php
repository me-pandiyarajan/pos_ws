<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNewOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('new_order', function(Blueprint $table) {
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
		Schema::table('new_order', function(Blueprint $table) {
			$table->dropForeign('new_order_estimate_id_foreign');
			$table->dropForeign('new_order_created_by_foreign');
			$table->dropForeign('new_order_last_updated_by_foreign');
		});
	}

}
