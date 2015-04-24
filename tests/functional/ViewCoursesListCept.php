<?php
use Laracasts\TestDummy\Factory;

$I = new FunctionalTester($scenario);

$I->wantTo('view list with all courses');

$courses = Factory::times(5)->create('App\Course');

$I->amOnRoute('dashboard_path');
$I->seeCurrentRouteIs('dashboard_path');
$I->click('Courses');
$I->seeCurrentRouteIs('courses.index');
$I->see('All Courses');

foreach ($courses as $course)
{
	$I->see($course->name);
}

