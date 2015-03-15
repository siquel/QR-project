<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AnswersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 4) as $index)
		{
			Answer::create([
				'answer' => $faker->sentence(1),
				'correct' => $faker->unique()->numberBetween(0, 3),
				'question_id' => 3
			]);
		}
	}

}