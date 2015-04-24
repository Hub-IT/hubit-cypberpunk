<?php
$factory('App\Cyberpunk', [
	'name'             => $faker->name,
	'email'            => $faker->unique()->email,
	'deree_student_id' => $faker->unique()->numberBetween(0, 999999)
]);

$factory('App\Course', [
	'name' => $faker->name,
]);
