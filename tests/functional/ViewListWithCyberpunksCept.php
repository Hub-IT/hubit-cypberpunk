<?php
use Laracasts\TestDummy\Factory;

$I = new FunctionalTester($scenario);

$I->wantTo('view list with all cyberpunks');

$cyberpunks = Factory::times(10)->create('App\Cyberpunk');

$I->amOnRoute('dashboard_path');
$I->seeCurrentRouteIs('dashboard_path');
$I->click('Cyberpunks');
$I->seeCurrentRouteIs('cyberpunks.index');
$I->see('All Cyberpunks');
$I->see($cyberpunks[0]->name);
