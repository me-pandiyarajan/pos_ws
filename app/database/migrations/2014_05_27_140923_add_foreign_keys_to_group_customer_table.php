<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGroupCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('group_customer', function(Blueprint $table) {
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
		Schema::table('group_customer', function(Blueprint $table) {
			$table->dropForeign('group_customer_created_by_foreign');
			$table->dropForeign('group_customer_last_updated_by_foreign');
		});
	}

}
