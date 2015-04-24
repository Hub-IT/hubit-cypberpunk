<?php
use App\Course;
use App\Cyberpunk;
use Faker\Factory;
use Illuminate\Database\Seeder;

/**
 * @author Rizart Dokollari
 * @since 24/4/2015
 */
class CourseCyberpunkTableSeeder extends Seeder {

	public function run()
	{
		$faker = Factory::create();
		$coursesIds = Course::lists('id');
		$cyberpunksIds = Cyberpunk::lists('id');

		foreach (range(1, 10) as $index)
		{
			$randomCyberpunkId = $faker->randomElement($cyberpunksIds);
			$randomCourseId = $faker->randomElement($coursesIds);

			$cyberpunk = Cyberpunk::find($randomCyberpunkId);
			$cyberpunk->courses()->attach($randomCourseId);
		}
	}
}