<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaxClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tax_class', function(Blueprint $table) {
			$table->integer('tax_class_id', true);
			$table->string('tax_class_name', 45)->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated_date')->nullable();
			$table->integer('last_updated_by')->index('`fk_tax_class_users1_idx`');
			$table->integer('created_by')->index('`fk_tax_class_users2_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tax_class');
	}

}
