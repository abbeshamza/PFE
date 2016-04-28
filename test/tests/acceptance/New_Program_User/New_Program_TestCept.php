<?php

use Step\Acceptance\Feuille1\UserController as UserTester;
use Step\Acceptance\Feuille1\AdminController as AdminTester;
use Codeception\Util\Fixtures;


$I = new AcceptanceTester($scenario);
$U = new UserTester($I);
$A = new AdminTester($I);
/*
$I->wantTo('login as a prospect to add a member');
$U->login(Fixtures::get('prospectUsername'),Fixtures::get('pwd'));
$U->addMember(Fixtures::get('firstNameMember'),Fixtures::get('lastNameMember'),Fixtures::get('emailMember'));
$U->logout();
$I->wantTo('login as a member to add a program');
$U->login(Fixtures::get('emailMember'),Fixtures::get('pwd'));
$U->addProgram(Fixtures::get('programName'),Fixtures::get('programFile'));
$U->logout();
$I->wantTo('login as a admin to activate program');
$I->resetEmails();
$U->login(Fixtures::get('adminEmail'),Fixtures::get('pwd'));
$A->activateProgram();
$A->logout();
$I->wantTo('login as a member and check the program');
$U->login(Fixtures::get('emailMember'),Fixtures::get('pwd'));
$U->checkProgramStatus(Fixtures::get('StatusProgramPreProduction'),Fixtures::get('monyToCheck'));
$I->wantTo('add easymember1 to program');
$I->wait(2);
$U->addNewParticipentToProgram(Fixtures::get('newParticipant1FirstName'),Fixtures::get('newParticipant1LastName'),Fixtures::get('newParticipant1Email'));
$U->logout();
$I->wait(2);
$I->wantTo('complete registration to easymember1');
$U->goToUrlFromInvitationEmail();
$U->completeRegistration(Fixtures::get('pwd'),Fixtures::get('pwd'),Fixtures::get('newParticipant1Adresse'),Fixtures::get('newParticipant1City'),Fixtures::get('newParticipant1PostalCode'),Fixtures::get('newParticipant1PhoneNumber'));
// check if user authenticated or perform login
$U->logout();
$I->wait(2);
//redirection to a wrong url--------------------------------------------------------
$I->wantTo('login as a easymember1');
$U->login(Fixtures::get('newParticipant1Email'),Fixtures::get('pwd'));
$U->parrainage(Fixtures::get('newParticipant2Email'));
$U->logout();
$I->resetEmails();
$I->wantTo('login as member to add easymember2 to the program');
$U->login(Fixtures::get('emailMember'),Fixtures::get('pwd'));
$U->addMemberToMyProgram();
$I->wait(2);
$U->logout();
$I->wantTo('complete registration to easymember2');
$U->goToUrlFromInvitationEmail();
$U->completeRegistration(Fixtures::get('pwd'),Fixtures::get('pwd'),Fixtures::get('newParticipant2Adresse'),Fixtures::get('newParticipant2City'),Fixtures::get('newParticipant2PostalCode'),Fixtures::get('newParticipant2PhoneNumber'));

*/
$I->wantTo('login as a member to verify easymember2');
$U->login(Fixtures::get('emailMember'),Fixtures::get('pwd'));
$U->checkProgramStatus(Fixtures::get('StatusProgramPreProduction'),Fixtures::get('monyToCheck'));
$U->goToMember2Profile();