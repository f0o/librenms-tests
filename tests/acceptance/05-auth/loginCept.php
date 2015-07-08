<?php
$scenario->group('core');
$scenario->group('auth');
require '_bootstrap.php';

$I->amOnPage('/');
$I->setCookie('PHPSESSID', 'testsuite-supercookie');

$I->wantTo('Login');
$I->amOnPage('/');
$I->waitForElement('.pace-done',60);

$I->makeScreenshot($SELF);

$I->fillField('username','root');
$I->fillField('password','toor');
$I->click('submit');

$I->makeScreenshot($SELF);

$I->see('Overview');

$I->makeScreenshot($SELF);
