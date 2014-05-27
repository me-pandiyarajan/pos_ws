<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryDimensionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_dimensions', function(Blueprint $table) {
			$table->integer('dim_id', true);
			$table->string('metrics', 45)->nullable();
			$table->integer('category_id')->index('`fk_category_dimensions_categories1_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category_dimensions');
	}

}
