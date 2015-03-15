<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class QuestionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Question::create([
                                            'question' => $faker->realText(50),
                                            //'answer' => $faker->sentence(1),
                                            //'points' => $faker->randomElement(array(1,3,5)),
                                            'event_id' => rand(1,2),
                                            'user_id' => rand(1,5)
			]);
		}
	}

}