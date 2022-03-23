<?php

use Page\Acceptance\AuthErrorPage;

/**
 * Класс для проверки авторизации
 */
class AuthErrorCest
{
    /**
     * Авторизация через заблокированного пользователя
     */
    public function checkLoginWithBlockedUser(AcceptanceTester $I)
    {
        $loginPage = new AuthErrorPage($I);

        $I->amOnPage(AuthErrorPage::$URL);

        $I->seeElement(AuthErrorPage::$usernameField);
        $loginPage->enterUsername();

        $I->seeElement(AuthErrorPage::$passwordField);
        $loginPage->enterPassword();

        $I->seeElement(AuthErrorPage::$loginButton);
        $loginPage->clickLoginButton();

        $I->waitForElementVisible(AuthErrorPage::$errorBlock);
        $loginPage->closeErrorBox();

        $I->dontSee(AuthErrorPage::$errorBlock);
    }
}
