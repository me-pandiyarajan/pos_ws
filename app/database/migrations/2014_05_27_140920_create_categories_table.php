<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->integer('category_id', true);
			$table->string('category_name', 45)->nullable();
			$table->string('comments', 45)->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated_date')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index('`fk_categories_users1_idx`');
			$table->integer('last_updated_by')->unsigned()->nullable()->index('`fk_categories_users2_idx`');
			$table->boolean('status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
	}

}
