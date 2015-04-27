<?php
use Laracasts\TestDummy\Factory;

$I = new FunctionalTester($scenario);

$I->wantTo('view list with all courses');

$courses = Factory::times(5)->create('App\Course');

$I->amOnRoute('courses.index');
$I->seeCurrentRouteIs('courses.index');
$I->see('All Courses');

foreach ($courses as $course)
{
	$I->see($course->name);
}

