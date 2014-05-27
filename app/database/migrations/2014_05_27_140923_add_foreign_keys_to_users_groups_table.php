<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_groups', function(Blueprint $table) {
			$table->foreign('group_id')->references('id')->on('groups');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_groups', function(Blueprint $table) {
			$table->dropForeign('users_groups_group_id_foreign');
			$table->dropForeign('users_groups_user_id_foreign');
		});
	}

}
