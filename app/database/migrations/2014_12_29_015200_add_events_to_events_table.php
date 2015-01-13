<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventsToEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('events')->insert(
				array(
					'title' => 'Unisateen häät',
					'description' => 'unisade <3',
					'user_id' => 1,
					'start' => '2015-01-13 00:00:01'
					)
			);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('events')->delete();
	}

}
