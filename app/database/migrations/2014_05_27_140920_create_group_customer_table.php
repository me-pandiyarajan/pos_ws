<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_customer', function(Blueprint $table) {
			$table->integer('customer_group_id', true);
			$table->string('customer_group_name', 45)->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated_date')->nullable();
			$table->integer('created_by')->unsigned()->index('`fk_group_customer_users1_idx`');
			$table->integer('last_updated_by')->unsigned()->index('`fk_group_customer_users2_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_customer');
	}

}
