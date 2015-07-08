<?php
$scenario->group('alerts');
$scenario->group('maps');
require '_bootstrap.php';

$I->wantTo('Add a Map');
$I->amOnPage('/alert-map/'); $I->waitForElement('.pace-done',60);

$I->makeScreenshot($SELF);

$I->click("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/button[@class='btn btn-primary btn-sm']");
$I->waitForElementVisible("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-map']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']",10);

$selector = "/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-map']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='maps']/div[@class='form-group'][1]/div[@class='col-sm-9']/span[@class='twitter-typeahead']/input[@id='rule']";
$I->click($selector);
$I->fillField($selector, "testsuite");

$selector = "/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-map']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='maps']/div[@class='form-group'][2]/div[@class='col-sm-9']/span[@class='twitter-typeahead']/input[@id='target']";
$I->click($selector);
$I->fillField($selector,"192.168.0.6");

$I->click("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-map']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='maps']/div[@class='form-group'][3]/div[@class='col-sm-offset-3 col-sm-3']/button[@id='map-submit']");

$I->makeScreenshot($SELF);

$I->reloadPage();
$I->waitForElement('.pace-done',60);

$I->see("testsuite");

$I->makeScreenshot($SELF);
