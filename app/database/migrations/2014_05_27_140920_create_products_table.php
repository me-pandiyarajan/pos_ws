<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->integer('product_gen_id', true);
			$table->string('Product_ID_PLU', 45)->nullable()->unique('`Product_ID_PLU`');
			$table->string('sku', 45)->nullable()->unique('`sku`');
			$table->string('barCodeImage')->nullable();
			$table->string('product_name', 45)->nullable();
			$table->string('description', 45)->nullable();
			$table->string('short_description', 45)->nullable();
			$table->string('status', 45)->nullable();
			$table->string('country_of_manufacture', 45)->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->float('group_price', 10, 0)->nullable();
			$table->dateTime('special_price_from')->nullable();
			$table->dateTime('special_price_to')->nullable();
			$table->integer('installation_charges')->nullable();
			$table->float('total_cost', 10, 0)->nullable();
			$table->float('grand_total', 10, 0)->nullable();
			$table->string('upload_image', 100)->nullable();
			$table->integer('quantity')->nullable();
			$table->string('unit', 45)->nullable();
			$table->string('material', 225)->nullable();
			$table->boolean('stock_availability')->nullable();
			$table->integer('safety_stock_level')->nullable();
			$table->integer('pos_stock_level')->nullable();
			$table->string('dimen_unit', 225)->nullable();
			$table->float('weight', 10, 0)->nullable();
			$table->float('width', 10, 0)->nullable();
			$table->float('length', 10, 0)->nullable();
			$table->float('height', 10, 0)->nullable();
			$table->string('design_name', 45)->nullable();
			$table->string('shade', 45)->nullable();
			$table->dateTime('created_date')->nullable();
			$table->dateTime('last_updated')->nullable();
			$table->dateTime('product_activated')->nullable();
			$table->integer('approved')->nullable();
			$table->dateTime('approved_date')->nullable();
			$table->integer('suppliers_supplier_id')->nullable()->index('`fk_products_suppliers1_idx`');
			$table->integer('tax_class_tax_class_id')->nullable()->index('`fk_products_tax_class1_idx`');
			$table->integer('created_by')->nullable()->index('`fk_products_users1_idx`');
			$table->integer('last_updated_by')->nullable()->index('`fk_products_users2_idx`');
			$table->integer('approved_by')->nullable()->index('`fk_products_users3_idx`');
			$table->integer('categories_category_id')->nullable()->index('`fk_products_categories1_idx`');
			$table->integer('deleted')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
