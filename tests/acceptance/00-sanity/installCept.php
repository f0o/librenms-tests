<?php
$scenario->group('sanity');
require '_bootstrap.php';

$I->wantTo('Check for disabled installer');
$I->amOnPage('/install.php');
$I->seeCurrentUrlEquals('/');

$I->makeScreenshot($SELF);
