<?php
use App\Cyberpunk;
use Faker\Factory;
use Illuminate\Database\Seeder;

/**
 * @author Rizart Dokollari
 * @since 24/4/2015
 */
class CyberpunksTableSeeder extends Seeder {

	public function run()
	{
		$faker = Factory::create();

		foreach (range(1, 50) as $index)
		{
			Cyberpunk::create([
				'name'             => $faker->name,
				'email'            => $faker->unique()->email,
				'deree_student_id' => $faker->unique()->numberBetween(0, 999999),
			]);
		}
	}
}