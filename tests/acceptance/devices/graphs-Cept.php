<?php
$scenario->group('devices');
require '_bootstrap.php';
$I->wantTo('Devices Graphs');
$I->amOnPage('/devices/format=graph_bits/');
$I->waitForElement('.pace-done',60);
$I->seeNumberOfElements("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div",[3,10]);

$I->makeScreenshot($SELF);
