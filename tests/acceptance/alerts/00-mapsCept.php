<?php
$scenario->group('alerts');
$scenario->group('maps');
require '_bootstrap.php';

$I->wantTo('List all Maps');
$I->amOnPage('/alert-map/'); $I->waitForElement('.pace-done',60);
$I->seeElement("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/button[@class='btn btn-primary btn-sm']");

$I->makeScreenshot($SELF);
