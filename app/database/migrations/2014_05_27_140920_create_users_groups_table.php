<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_groups', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('`fk_users_groups_users1_idx`');
			$table->integer('group_id')->unsigned()->index('`fk_users_groups_groups1_idx`');
			$table->unique(['user_id','group_id'], '`uc_users_groups`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_groups');
	}

}
