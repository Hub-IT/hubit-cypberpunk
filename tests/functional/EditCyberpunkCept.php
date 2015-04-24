<?php
use Laracasts\TestDummy\Factory;

$I = new FunctionalTester($scenario);
$cyberpunks = Factory::times(5)->create('App\Cyberpunk');
$faker = \Faker\Factory::create();
$cyberpunk = $cyberpunks[0];
$cyberpunkDummy = ['name'             => $faker->name,
                   'email'            => $faker->email,
                   'deree_student_id' => $faker->unique()->numberBetween(0, 999999)];

$I->wantTo('edit all data of a cyberpunk');
$I->amOnRoute('dashboard_path');
$I->click('Cyberpunks');
$I->seeCurrentRouteIs('cyberpunks.index');
// TODO: attempt to use fuzzy locate; remove id
$I->click("#id-edit-$cyberpunk->id");
$I->canSeeCurrentRouteIs('cyberpunks.edit', $cyberpunk);

$I->fillField('Name:', $cyberpunkDummy['name']);
$I->fillField('Email:', $cyberpunkDummy['email']);
$I->fillField('DEREE ID:', $cyberpunkDummy['deree_student_id']);
$I->click('Update');

$I->see('Cyberpunk successfully updated!');
$I->seeCurrentRouteIs('cyberpunks.edit', $cyberpunk);
