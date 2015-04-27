<?php
use Laracasts\TestDummy\Factory;

$I = new FunctionalTester($scenario);
$cyberpunks = Factory::times(5)->create('App\Cyberpunk');
$faker = \Faker\Factory::create();
$cyberpunk = $cyberpunks[0];
$cyberpunkDummy = ['name'             => $faker->name,
                   'email'            => $faker->email,
                   'deree_student_id' => $faker->unique()->numberBetween(0, 999999)];

$I->wantTo('delete a cyberpunk.');

$I->amOnRoute('cyberpunks.index');

$I->seeCurrentRouteIs('cyberpunks.index');

$I->click("#id-delete-$cyberpunk->id");

$I->dontSeeRecord('cyberpunks', ['id' => $cyberpunk->id]);

$I->see('Cyberpunk successfully deleted!');

$I->amOnRoute('cyberpunks.index');
