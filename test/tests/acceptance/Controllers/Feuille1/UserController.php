<?php
namespace Controllers\Feuille1;
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 27/04/16
 * Time: 10:38
 */
class UserController
{
    use PagesObject\LoginPage;


    protected $user;

    public function __construct(AcceptanceTester $I) {
        $this->user = $I;
    }
    public function login($username, $password) {
        $this->user->amOnUrl(LoginPage::$URL);
        $this->user->fillField(LoginPage::$usernameField, $username);
        $this->user->fillField(LoginPage::$passwordeField, $password);
        $this->user->click(LoginPage::$loginButton);
    }


}