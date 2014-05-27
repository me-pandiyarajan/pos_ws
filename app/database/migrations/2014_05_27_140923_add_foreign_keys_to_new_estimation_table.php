<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNewEstimationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('new_estimation', function(Blueprint $table) {
			$table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('new_estimation', function(Blueprint $table) {
			$table->dropForeign('new_estimation_supplier_id_foreign');
		});
	}

}
