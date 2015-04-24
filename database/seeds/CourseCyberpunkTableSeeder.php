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
		$coursesIds = Course::lists('id');
		$cyberpunksIds = Cyberpunk::lists('id');
		$fakerCyberpunks = Factory::create();

		foreach (range(1, 10) as $index)
		{
			$fakerCourses = Factory::create();
			$randomCyberpunkId = $fakerCyberpunks->unique()->randomElement($cyberpunksIds);

			$cyberpunk = Cyberpunk::find($randomCyberpunkId);

			foreach (range(1, rand(1, 4)) as $index)
			{
				$cyberpunk->courses()->attach($fakerCourses->unique()->randomElement($coursesIds));
			}
		}
	}
}