<?php

use App\Cyberpunk;
use Laracasts\TestDummy\Factory;

$I = new FunctionalTester($scenario);
$faker = \Faker\Factory::create();
$courses = Factory::times(5)->create('App\Course');
$course = Factory::create('App\Course');
$cyberpunkDummy = ['name'             => $faker->name,
                   'email'            => $faker->email,
                   'deree_student_id' => $faker->unique()->numberBetween(899999, 999999)];

$I->wantTo('register a new cyberpunk.');

$I->amOnRoute('cyberpunks.index');
$I->seeCurrentRouteIs('cyberpunks.index');
$I->click('Register Cyberpunk');
$I->seeCurrentRouteIs('cyberpunks.create');
// TODO: attempt to use fuzzy locate; remove id

$I->fillField('Name:', $cyberpunkDummy['name']);
$I->fillField('Email:', $cyberpunkDummy['email']);
$I->fillField('DEREE ID:', $cyberpunkDummy['deree_student_id']);

//$I->selectOption('form select[name=courses[]]', $course->name);
$I->selectOption('Courses:', [$courses[0]->name, $courses[1]->name]);

$I->click('Update');

$I->seeRecord('cyberpunks', $cyberpunkDummy);

$cyberpunk = Cyberpunk::where('email', $cyberpunkDummy['email'])->first();

$courseAdded = DB::table('course_cyberpunk')
		->where('cyberpunk_id', $cyberpunk->id)
		->where('course_id', $courses[0]->id)
		->count() > 0;

$I->assertTrue($courseAdded, "Course should have been registered in course_cyberpunk table.");

$I->see('Cyberpunk successfully registered!');

