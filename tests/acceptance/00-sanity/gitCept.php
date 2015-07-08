<?php
$scenario->group('sanity');
require '_bootstrap.php';

$I->wantTo('Check for disabled .git');
$I->amOnPage('/.git/');
$I->see('Login');

$I->makeScreenshot($SELF);

