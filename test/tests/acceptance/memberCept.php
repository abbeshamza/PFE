<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

//$I->executeJS("window.confirm = function(msg){return true;};");

$I->amOnUrl('http://localhost/~hab/cooperons/front/login');

/*$I->makeScreenshot('11');
$I->makeScreenshot('21');
$I->makeScreenshot('31');
$I->makeScreenshot('41');
$I->makeScreenshot('51');
$I->makeScreenshot('61');
$I->makeScreenshot('71');
*/
$I->fillField('input[name="username"]', "member@test.com");
$I->fillField('input[name="password"]', "123456");
$I->click("//button[@aria-label='Se connecter']");
$I->amOnUrl('http://localhost/~hab/cooperons/front/member/programs');