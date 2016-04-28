<?php
namespace PagesObject\Feuille1 ;

/**
 * Created by PhpStorm.
 * User: hab
 * Date: 27/04/16
 * Time: 10:40
 */
class LoginPage
{

    // URL of a page
    public static $URL = 'http://localhost/~hab/cooperons/front/login';
    // This properties define a UI map for Login Page
    public static $usernameField = 'input[name="username"]';
    public static $passwordeField = 'input[name="password"]';
    public static $loginButton = "//button[@aria-label='Se connecter']";

}