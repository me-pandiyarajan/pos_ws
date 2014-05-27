<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('new_order', function(Blueprint $table) {
			$table->integer('order_id', true);
			$table->string('order_name', 45)->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated_date')->nullable();
			$table->string('order_comments', 45)->nullable();
			$table->integer('delivery_status')->nullable();
			$table->integer('estimate_id')->unsigned()->index('`fk_new_order_New_Estimation1_idx`');
			$table->integer('created_by')->unsigned()->index('`fk_new_order_users1_idx`');
			$table->integer('last_updated_by')->unsigned()->nullable()->index('`fk_new_order_users2_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('new_order');
	}

}
