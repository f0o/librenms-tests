<?php
$scenario->group('devices');
require '_bootstrap.php';
$I->wantTo('Devices List');
$I->amOnPage('/devices/');
$I->waitForElement('.pace-done',60);
$I->seeNumberOfElements("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@class='panel panel-default panel-condensed']/div[@class='table-responsive']/table[@id='devices']/tbody/tr",[2,10]);

$I->makeScreenshot($SELF);
