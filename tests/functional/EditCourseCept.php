<?php
use Laracasts\TestDummy\Factory;

$I = new FunctionalTester($scenario);
$course = Factory::times(5)->create('App\Course');
$faker = \Faker\Factory::create();
$courses = $course[0];
$courseDummy = ['name' => $faker->name];

$I->wantTo('edit all data of a course');
$I->amOnRoute('dashboard_path');
$I->click('Courses');
$I->seeCurrentRouteIs('courses.index');
// TODO: attempt to use fuzzy locate; remove id
$I->click("#id-edit-$courses->id");
$I->canSeeCurrentRouteIs('courses.edit', $courses);

$I->fillField('Name:', $courseDummy['name']);
$I->click('Update');

$I->seeRecord('courses', $courseDummy);

$I->see('Course successfully updated!');
$I->seeCurrentRouteIs('courses.edit', $courses);

