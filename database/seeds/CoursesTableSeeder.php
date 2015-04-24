<?php
use App\Course;
use Faker\Factory;
use Illuminate\Database\Seeder;

/**
 * @author Rizart Dokollari
 * @since 24/4/2015
 */
class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Factory::create();

		foreach (range(1, 50) as $index)
		{
			Course::create([
				'name' => $faker->unique()->name,
			]);
		}
	}
}