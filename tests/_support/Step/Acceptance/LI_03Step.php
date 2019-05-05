<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_03Step extends \AcceptanceTester
{
    public function LoginFuntion_03($userName, $password)
    {
        /**
         * funtion check type of password
         */
        $I= $this;
        $I->amOnPage(Login_Page::$URL);
        $I->waitForElementVisible(Login_Page::$usernameField,10);
        $I->fillField(Login_Page::$usernameField,$userName);
        $I->click(Login_Page::$continueButton);
        $I-> waitForElementVisible(Login_Page::$passwordField,10);
        $I->fillField(Login_Page::$passwordField,$password);
        $I->waitForElementVisible(Login_Page::$eyes,10);
        $I->click(Login_Page::$eyes);


    }
}