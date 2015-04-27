<?php

$I = new FunctionalTester($scenario);
$faker = \Faker\Factory::create();
$courseDummy = ['name' => $faker->name];

$I->wantTo('register a new course.');

$I->amOnRoute('courses.index');
$I->seeCurrentRouteIs('courses.index');
$I->click('Register Course');
$I->seeCurrentRouteIs('courses.create');
// TODO: attempt to use fuzzy locate; remove id

$I->canSeeCurrentRouteIs('courses.create');

$I->fillField('Name:', $courseDummy['name']);
$I->click('Register');

$I->seeRecord('courses', $courseDummy);

$I->see('Course successfully register!');

