<?php
$scenario->group('core');
$scenario->group('auth');
require '_bootstrap.php';

$I->amOnPage('/');
$I->setCookie('PHPSESSID', 'testsuite-supercookie');

$I->wantTo('Logout');
$I->amOnPage('/logout/');
$I->waitForElement('.pace-done',60);

$I->see('login');

$I->makeScreenshot($SELF);
