<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer', function(Blueprint $table) {
			$table->integer('customer_id', true);
			$table->string('first_name', 45)->nullable();
			$table->string('last_name', 45)->nullable();
			$table->string('password', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->integer('mobile_number')->nullable();
			$table->boolean('status')->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated_date')->nullable();
			$table->integer('created_by')->unsigned()->index('`fk_customer_users1_idx`');
			$table->integer('last_updated_by')->unsigned()->index('`fk_customer_users2_idx`');
			$table->integer('group_customer_customer_group_id')->index('`fk_customer_group_customer1_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer');
	}

}
