<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('QuestionsTableSeeder');
		$this->call('EventsTableSeeder');
		$this->call('TeamsTableSeeder');
		$this->call('UsersTeamsTableSeeder');
		$this->call('AnswersTableSeeder');
	}

}
