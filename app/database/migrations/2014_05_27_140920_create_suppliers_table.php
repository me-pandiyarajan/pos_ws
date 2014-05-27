<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suppliers', function(Blueprint $table) {
			$table->integer('supplier_id', true);
			$table->string('supplier_name', 45)->nullable();
			$table->integer('telephone')->nullable();
			$table->string('email', 45)->nullable();
			$table->string('street', 45)->nullable();
			$table->string('state', 45)->nullable();
			$table->integer('zip_code')->nullable();
			$table->string('city', 45)->nullable();
			$table->string('country', 45)->nullable();
			$table->boolean('status')->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated_date')->nullable();
			$table->integer('created_by')->nullable()->index('`fk_suppliers_users1_idx`');
			$table->integer('last_updated_by')->nullable()->index('`fk_suppliers_users2_idx`');
			$table->boolean('deleted')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suppliers');
	}

}
