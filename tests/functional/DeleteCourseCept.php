<?php
use Laracasts\TestDummy\Factory;

$I = new FunctionalTester($scenario);
$courses = Factory::times(5)->create('App\Course');
$faker = \Faker\Factory::create();
$course = $courses[0];
$courseDummy = ['name' => $faker->unique()->name,];

$I->wantTo('delete a course.');

$I->amOnRoute('courses.index');

$I->seeCurrentRouteIs('courses.index');

$I->seeRecord('courses', ['id' => $course->id]);

$I->click("#id-delete-$course->id");

$I->dontSeeRecord('courses', ['id' => $course->id]);

$I->see('Course successfully deleted!');

$I->amOnRoute('courses.index');

