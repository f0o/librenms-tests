<?php
$scenario->group('alerts');
$scenario->group('rules');
require '_bootstrap.php';

$I->wantTo('List all Rules');
$I->amOnPage('/alert-rules/'); $I->waitForElement('.pace-done',60);
$I->seeElement("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@class='row'][2]/div[@class='col-sm-12']/form/p[@class='text-center']/button[@id='create-default']");

$I->makeScreenshot($SELF);
