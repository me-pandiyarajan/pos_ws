<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customer', function(Blueprint $table) {
			$table->foreign('group_customer_customer_group_id')->references('customer_group_id')->on('group_customer');
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
		Schema::table('customer', function(Blueprint $table) {
			$table->dropForeign('customer_group_customer_customer_group_id_foreign');
			$table->dropForeign('customer_created_by_foreign');
			$table->dropForeign('customer_last_updated_by_foreign');
		});
	}

}
