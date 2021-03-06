<?php
namespace Page\Acceptance\Feuille1;

class MonEntreprise
{
    // include url of current page
    public static $URL = '/corporates';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    public static $addUserButton = "//button[@aria-label='Nouvel Utilisateur']";
    public static $newUserLastNameField="input[name=lastName]";
    public static $newUserFirsNameField="input[name=firstName]";
    public static $newUserEmailField="input[name=email]";
    public static $newUserSendButton="(//button[@type='submit'])[2]";


    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
