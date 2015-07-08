<?php
$scenario->group('alerts');
$scenario->group('rules');
require '_bootstrap.php';

$I->wantTo('Add a Rule into the Modal');
$I->amOnPage('/alert-rules/'); $I->waitForElement('.pace-done',60);
$I->makeScreenshot($SELF);

$I->click("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/form[@id='result_form']/div[@class='table-responsive']/table[@class='table table-hover table-condensed']/tbody/tr[2]/td[1]/button[@class='btn btn-primary btn-sm']");
$I->waitForElementVisible("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-alert']/div[@class='modal-dialog']/div[@class='modal-content']",10);

$selector = "/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-alert']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='rules']/div[@class='form-group'][2]/div[@class='col-sm-5']/span[@class='twitter-typeahead']/input[@id='suggest']";
$I->click($selector);
$I->fillField($selector, "macros.testsuite");

$selector = "/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-alert']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='rules']/div/div[@class='col-sm-5']/input[@id='value']";
$I->click($selector);
$I->fillField($selector,"0");

$I->click("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-alert']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='rules']/div[@class='form-group'][5]/div[@class='col-sm-5']/button[@id='and']");

$I->click("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-alert']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='rules']/div/div[@class='col-sm-9']/input[@id='name']");
$I->fillField("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-alert']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='rules']/div/div[@class='col-sm-9']/input[@id='name']","testsuite");

$I->click("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='create-alert']/div[@class='modal-dialog']/div[@class='modal-content']/div[@class='modal-body']/form[@id='rules']/div/div[@class='col-sm-offset-3 col-sm-3']/button[@id='rule-submit']");

$I->makeScreenshot($SELF);

$I->reloadPage();
$I->waitForElement('.pace-done',60);

$I->see("macros.testsuite");

$I->makeScreenshot($SELF);

