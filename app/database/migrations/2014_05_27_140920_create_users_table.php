<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ip_address', 15);
			$table->string('username', 100);
			$table->string('password');
			$table->string('salt', 40)->nullable();
			$table->string('email', 100);
			$table->string('activation_code', 40)->nullable();
			$table->string('forgotten_password_code', 40)->nullable();
			$table->integer('forgotten_password_time')->unsigned()->nullable();
			$table->string('remember_code', 40)->nullable();
			$table->integer('created_on')->unsigned();
			$table->integer('last_login')->unsigned()->nullable();
			$table->integer('active')->unsigned()->nullable();
			$table->string('first_name', 50)->nullable();
			$table->string('last_name', 50)->nullable();
			$table->string('company', 100)->nullable();
			$table->string('phone', 20)->nullable();
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
		Schema::drop('users');
	}

}
