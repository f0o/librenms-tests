<?php
$scenario->group('alerts');
$scenario->group('rules');
require '_bootstrap.php';

$I->wantTo("Delete the Rule again");
$I->amOnPage('/alert-rules/'); $I->waitForElement('.pace-done',60);
$I->makeScreenshot($SELF);

$I->click("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/form[@id='result_form']/div[@class='table-responsive']/table[@class='table table-hover table-condensed']/tbody/tr/td/button[@class='btn btn-danger btn-sm']/span[@class='glyphicon glyphicon-trash']");

$selector = "/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@id='confirm-delete']/div[@class='modal-dialog modal-sm']/div[@class='modal-content']/div[@class='modal-footer']/form[@class='remove_token_form']/button[@id='alert-rule-removal']";
$I->waitForElementVisible($selector);
$I->click($selector);


$I->waitForElementVisible("/html/body/div[@class='container-fluid']/div[@class='row']/div[@class='col-md-12']/div[@class='row']/div[@class='col-sm-12']/span[@id='message']/div[@class='alert alert-info']",10);
$I->see("Maps has been deleted.Alert rule has been deleted.");

$I->makeScreenshot($SELF);
