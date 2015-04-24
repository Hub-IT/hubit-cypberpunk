<?php
$I = new FunctionalTester($scenario);
$I->wantTo('view all data the dashboard page provides.');

// I am on dashboard page
$I->amOnRoute('dashboard_path');

$I->seeCurrentRouteIs('dashboard_path');

$I->see('Dashboard');