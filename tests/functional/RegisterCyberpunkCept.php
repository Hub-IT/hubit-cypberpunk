<?php

$I = new FunctionalTester($scenario);
$faker = \Faker\Factory::create();
$cyberpunkDummy = ['name'             => $faker->name,
                   'email'            => $faker->email,
                   'deree_student_id' => $faker->unique()->numberBetween(899999, 999999)];

$I->wantTo('register a new cyberpunk.');
$I->amOnRoute('dashboard_path');
$I->click('Cyberpunks');
$I->click('Register Cyberpunk');
$I->seeCurrentRouteIs('cyberpunks.create');
// TODO: attempt to use fuzzy locate; remove id

$I->canSeeCurrentRouteIs('cyberpunks.create');

$I->fillField('Name:', $cyberpunkDummy['name']);
$I->fillField('Email:', $cyberpunkDummy['email']);
$I->fillField('DEREE ID:', $cyberpunkDummy['deree_student_id']);
$I->click('Update');

$I->seeRecord('cyberpunks', $cyberpunkDummy);

$I->see('Cyberpunk successfully registered!');

