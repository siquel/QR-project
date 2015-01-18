<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTeamsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$pivots = [];
		foreach(range(1, 10) as $index)
		{
			$pivots[] = [
				'user_id' => rand(1,5),
				'team_id' => rand(1, 10)
			];
		}

		DB::table('team_user')->insert($pivots);
	}

}