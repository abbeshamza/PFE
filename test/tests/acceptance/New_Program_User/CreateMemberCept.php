<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->makeScreenshot('1a');
$I->amOnUrl('http://localhost/~hab/cooperons/front/login');
$I->makeScreenshot('2a');
$I->fillField('input[name="username"]', "prospect@test.com");
$I->wait(2);
$I->makeScreenshot('3a');
$I->fillField('input[name="password"]', "123456");
$I->wait(2);
$I->makeScreenshot('4a');
$I->click("//button[@aria-label='Se connecter']");
$I->wait(2);
$I->makeScreenshot('5a');
$I->amOnUrl('http://localhost/~hab/cooperons/front/corporates');
$I->wait(2);
$I->makeScreenshot('6a');
$I->click("//button[@aria-label='Nouvel Utilisateur']");
$I->makeScreenshot('7a');
$I->fillField("input[name=lastName]", "Test");
$I->makeScreenshot('8a');
$I->fillField("input[name=firstName]", "Member");
$I->makeScreenshot('9a');
$I->fillField("input[name=email]", "member@test.com");
$I->makeScreenshot('10a');
$I->click("(//button[@type='submit'])[2]");
$I->makeScreenshot('11a');
$I->wait(2);

?>