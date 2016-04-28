<?php
$I = new AcceptanceTester($scenario);



// fonciton pour l 'extraction du lien d'inscription et une fonciton pour l'inscription

// extraction de l'url d activation
$urlActivation1 = $I->grabFromLastEmail('/ <a href(.*) target/');
$toDelete= array('<a href=','target','"',' ');
$urlActivation= str_replace($toDelete,"",$urlActivation1);


$I->wantTo('invite new user');
$I->amOnPage('/login');
$I->wait(2);
$I->makeScreenshot('programme/1');
$I->fillField('username', "easymember1@test.com");
$I->wait(2);
$I->makeScreenshot('programme/2');
$I->fillField('password',"123456" );
$I->makeScreenshot('programme/3');
$I->wait(2);
$I->click("//button[@aria-label='Se connecter']");
$I->wait(2);
// fin authentification

//$I->amOnUrl("http://localhost/~hab/cooperons/front/member/programs");




$I->click("//div[@id='global']/div/div/div/div/div[2]/div/div[2]/ul/li[3]/a/span");



$I->click("//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/md-content/div/ul/li/div[2]/a/ng-md-icon");
$I->fillField("//textarea[@id='emailsFilleuls']","< easymember2@test.com >");
$I->click("//button[@id='submitEmails']");
// déconnexion
$I->click("//div[@id='global']/div/div/div/div/div[2]/div/div[2]/ul/li[7]/a/span");
$I->wait(2);








$I->wantTo('activate user EasyMember2 ');

// extraction de l'url d activation
$urlActivation1 = $I->grabFromLastEmail('/ <a href(.*) target/');
$toDelete= array('<a href=','target','"',' ');
$urlActivation= str_replace($toDelete,"",$urlActivation1);

$I->amOnUrl($urlActivation);
$I->wait(2);
$I->click("//div[2]/a/span");
$I->wait(2);
$I->fillField("//input[@id='plainPassword']","123456");
$I->fillField("//input[@id='input_3']","123456");
$I->fillField("//input[@id='registration_contact_address']","12 rue du Test");
$I->fillField("//input[@id='registration_contact_city']","Test");
$I->fillField("//input[@id='registration_contact_postalCode']","12345");
$I->fillField("//input[@id='registration_contact_phone']","0123456789");
$I->checkOption("//md-checkbox/div");
$I->checkOption("//md-checkbox[@id='cgvProgram']/div");
$I->wait(2);
$I->click("//button[@id='registration_Valider']");
$I->wait(3);


// déconnexion
$I->click("//div[@id='global']/div/div/div/div/div[2]/div/div[2]/ul/li[7]/a/span");
$I->wait(2);
