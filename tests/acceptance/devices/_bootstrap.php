<?php
$I = new AcceptanceTester($scenario);
$I->amOnPage('/');
$I->setCookie('PHPSESSID', 'testsuite-supercookie');
$GetIncludingFile = function ()
{
    $file = false;
    $backtrace =  debug_backtrace();
    $include_functions = array('include', 'include_once', 'require', 'require_once');
    for ($index = 0; $index < count($backtrace); $index++)
    {
        $function = $backtrace[$index]['function'];
        if (in_array($function, $include_functions))
        {
            $file = $backtrace[$index]['file'];
            break;
        }
    }
    return $file;
};
$tmp = explode('/',$GetIncludingFile());
$x = sizeof($tmp)-1;
$SELF = $tmp[$x-1].'-'.$tmp[$x];

