<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products', function(Blueprint $table) {
			$table->foreign('categories_category_id')->references('category_id')->on('categories');
			$table->foreign('suppliers_supplier_id')->references('supplier_id')->on('suppliers');
			$table->foreign('tax_class_tax_class_id')->references('tax_class_id')->on('tax_class');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products', function(Blueprint $table) {
			$table->dropForeign('products_categories_category_id_foreign');
			$table->dropForeign('products_suppliers_supplier_id_foreign');
			$table->dropForeign('products_tax_class_tax_class_id_foreign');
		});
	}

}
