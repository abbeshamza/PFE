<?php
$email = "member@test.com";
$pwd="123456";
$I = new AcceptanceTester($scenario);
// Authentification
$I->wantTo('to perform login as a member');
$I->amOnPage('/login');
$I->wait(2);
$I->makeScreenshot('programme/1');
$I->fillField('username', $email);
$I->wait(2);
$I->makeScreenshot('programme/2');
$I->fillField('password',$pwd );
$I->makeScreenshot('programme/3');
$I->wait(2);
$I->click("//button[@aria-label='Se connecter']");
$I->wait(2);
// fin authentification

$I->resetEmails();
// mes programme
$I->click("//div[@id='global']/div/div/div/div/div[2]/div/div[2]/ul/li[3]/a/span");

//administration
$I->click("//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/md-content/div/ul/li/div[2]/a[2]/ng-md-icon");

$I->wait(2);
//chercher le module  (invisible)
$I->click("//button[@aria-label='Search']");
$I->fillField("//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/div[3]/md-card/md-content/md-toolbar[2]/div/md-input-container/input","test");
$I->pressKey("//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/div[3]/md-card/md-content/md-toolbar[2]/div/md-input-container/input",WebDriverKeys::ENTER);

// activation
$I->click("//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/div[3]/md-card/md-content/md-table-container/table/tbody/tr/td/div/button");
// déconn
$I->click("//div[@id='global']/div/div/div/div/div[2]/div/div[2]/ul/li[7]/a/span");





// validation deuxième compte

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


