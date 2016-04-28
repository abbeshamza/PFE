<?php
namespace Page\Acceptance\Feuille1;

class Program
{
    // include url of current page
    public static $URL = '/member/programs';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    public static $addProgramButton = "//button[@aria-label='Nouveau Programme']";
    public static $newProgramNameField="//input[@id='input_0']";
    public static $newProgramFileField='input[name="image"]';
    public static $nextButton="//button[@aria-label='Suivant']";
    public static $firstCheckBox="//md-checkbox[@aria-label='Checkbox 1']";
    public static $secondCheckBox="//md-checkbox[@aria-label='cgv']";
    public static $paymentMethodVirement="//a[@aria-label='Virement']";
    public static $statusOfProgram="//div[@id='global']/div/div/div[1]/div/div[2]/md-content/div[2]/div/md-content[1]/div/ul/li/div[1]/span[2]";
    public static $administrationButtom="//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/md-content/div/ul/li/div[2]/a[2]/ng-md-icon";
    public static $moneyLabel="//div[@id='global']/div/div/div[1]/div/div[2]/md-content/div[2]/div/div[4]/div/md-content/div/md-card/md-table-container/table/tbody/tr[1]/td[4]";
    public static $newParticipantFirstNameField="//input[@id='form_firstName']";
    public static $newParticipantLastNameField="//input[@id='form_lastName']";
    public static $newParticipantEmailField="//input[@id='form_email']";
    public static $newParticipantButtom="//button[@id='createEasyMember']";
    public static $parrainageButtom="//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/md-content/div/ul/li/div[2]/a/ng-md-icon";
    public static $emailsFilleulsField="//textarea[@id='emailsFilleuls']";
    public static $inviteButtom="//button[@id='submitEmails']";
    public static $searchForProgramButtom="//button[@aria-label='Search']";
    public static $searchForProgramField="//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/div[3]/md-card/md-content/md-toolbar[2]/div/md-input-container/input";
    public static $activationButtomForFirstIndex="//div[@id='global']/div/div/div/div/div[2]/md-content/div[2]/div/div[3]/md-card/md-content/md-table-container/table/tbody/tr/td/div/button";
    public static $member2ProfilUrl="//div[@id='global']/div/div/div[1]/div/div[2]/md-content/div[2]/div/div[3]/md-card/md-content/md-table-container/table/tbody/tr[2]/td[1]/div/a/ng-md-icon";
    public static $affaireNameField="//input[@id='form_label']";
    public static $createAffaireButtom="//buttom[@id='createAffair']";



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
