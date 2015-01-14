<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			MyEvent::create([
				'title' => $faker->sentence(),
				'description' => $faker->realText(10),
				'user_id' => $faker->numberBetween(1,6),
				'start' => $faker->dateTimeBetween('now', '+1 years')
			]);
		}
	}

}