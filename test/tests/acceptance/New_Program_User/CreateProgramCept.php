<?php
$I = new AcceptanceTester($scenario);







//------------------------------------------------------
$email = "member@test.com";
$pwd="123456";
$fichier='Statistiques.png';
$nomProgramme="EDATIS Easy";
$urlRegisterMember="";


// Authentification
$I->wantTo('to perform login as a member');
$I->amOnPage('/login');
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

// création du programme

$I->wantTo('Create a program');
$I->makeScreenshot('programme/4');
$I->amOnPage("/member/programs");
$I->wait(2);
$I->click("//button[@aria-label='Nouveau Programme']");
$I->makeScreenshot('programme/5');
$I->fillField("//input[@id='input_0']", $nomProgramme);
$I->makeScreenshot('programme/6');
$I->attachFile('input[name="image"]', $fichier);
$I->makeScreenshot('programme/7');
$I->click("//button[@aria-label='Suivant']");
$I->makeScreenshot('programme/8');
$I->wait(2);
$I->click("//button[@aria-label='Suivant']");
$I->makeScreenshot('programme/9');
$I->wait(2);
$I->checkOption("//md-checkbox[@aria-label='Checkbox 1']");
$I->makeScreenshot('programme/10');
$I->click("//button[@aria-label='Suivant']");
$I->makeScreenshot('programme/11');
$I->checkOption("//md-checkbox[@aria-label='cgv']");
$I->makeScreenshot('programme/12');
$I->click("//a[@aria-label='Virement']");
$I->makeScreenshot('programme/13');
// ifn création programme


// déconnex
$I->wantTo('Logout');
$I->click("//a[@title='Déconnexion']");
$I->makeScreenshot('programme/14');
$I->wait(2);
// fin déconnexion

// Authentification Admin
$I->wantTo('perform login as admin ');
$I->amOnPage('/login');
$I->makeScreenshot('programme/1');
$I->fillField('username', "admin@admin.com");
$I->wait(2);
$I->makeScreenshot('programme/2');
$I->fillField('password',"123456" );
$I->makeScreenshot('programme/3');
$I->wait(2);
$I->click("//button[@aria-label='Se connecter']");
$I->wait(4);
// fin authentification admin


$I->wantTo('activate the program');
$I->checkOption("//div[@id='content']/div/div/md-content/div/md-card/md-table-container/table/tbody/tr/td/md-checkbox/div");
$I->wait(2);
$I->makeScreenshot('programme/15');
$I->click("//div[@id='content']/div/div/md-content/div/md-card/md-toolbar/div/div[2]/button");
$I->wait(2);
$I->makeScreenshot('programme/16');
$I->click("//div[@id='ngdialog1']/div[2]/div/footer/button[2]");
$I->makeScreenshot('programme/17');
$I->wait(2);
$I->wantTo('logout from dashboard');
$I->click("//header[@id='header']/nav/div/ul/li[3]/a/ng-md-icon");
$I->wait(2);
// fin paiement

// Authentification
$I->wantTo('login as a user ');
$I->amOnPage('/login');
$I->makeScreenshot('programme/1');
$I->fillField('username', $email);
$I->wait(2);
$I->makeScreenshot('programme/2');
$I->fillField('password',$pwd );
$I->makeScreenshot('programme/3');
$I->wait(2);
$I->click("//button[@aria-label='Se connecter']");
$I->wait(2);


// vérification de la création du programme
$I->wantTo('check the program ');
$I->click("//div[@id='global']/div/div/div/div/div[2]/div/div[2]/ul/li[3]/a/span");
$I->see("Pré-production","//div[@id='global']/div/div/div[1]/div/div[2]/md-content/div[2]/div/md-content[1]/div/ul/li/div[1]/span[2]");
$I->click("//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/md-content/div/ul/li/div[2]/a[2]/ng-md-icon");
$I->see("-561,60 €","//div[@id='global']/div/div/div[1]/div/div[2]/md-content/div[2]/div/div[4]/div/md-content/div/md-card/md-table-container/table/tbody/tr[1]/td[4]");


// création d 'un nouveau membre dans le programme
$I->wantTo('add a new member ');
$I->click("//div[@id='global']/div/div/div/div/div[2]/div/div[2]/ul/li[3]/a/span");
$I->click("//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/md-content/div/ul/li/div[2]/a[2]/ng-md-icon");
$I->fillField("//input[@id='form_lastName']","Test" );
$I->fillField("//input[@id='form_firstName']","EasyMember1" );
$I->fillField("//input[@id='form_email']","easymember1@test.com" );
$I->wait(2);
$I->click("//button[@id='createEasyMember']");
$I->wait(4);
// fin

// déconnex
//$I->wantTo('Logout');
//$I->click("//a[@title='Déconnexion']");
$I->wait(2);
// fin déconnexion

////////////////////////////////////////         validation par email                        ///////////////////////////////////////////////////////////

