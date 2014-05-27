<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategoryDimensionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category_dimensions', function(Blueprint $table) {
			$table->foreign('category_id')->references('category_id')->on('categories');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('category_dimensions', function(Blueprint $table) {
			$table->dropForeign('category_dimensions_category_id_foreign');
		});
	}

}
