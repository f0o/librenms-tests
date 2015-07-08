<?php
$scenario->group('sanity');
require '_bootstrap.php';

$I->wantTo('Get a Login-Screen');
$I->amOnPage('/');
$I->see('login');

$I->makeScreenshot($SELF);
