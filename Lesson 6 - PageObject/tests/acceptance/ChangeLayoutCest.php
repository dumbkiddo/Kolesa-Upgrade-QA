<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для проверки смены раскладки
 */
class ChangeLayoutCest
{
    /**
     * Смена раскладки с Grid на List
     */
    public function checkChangeLayoutToList(AcceptanceTester $I)
    {
        $mainPage = new MainPage($I);
        $summerDressesPage = new SearchPage($I);

        $I->amOnPage(MainPage::$URL);
        $mainPage->openSummerDressesPage();
        $summerDressesPage->checkSummerDressesPage();

        $I->seeElement(SearchPage::$gridLayout);
        $summerDressesPage->checkGridLayout();

        $I->seeElement(SearchPage::$listLayoutButton);
        $summerDressesPage->changeLayoutToList();

        $I->waitForElement(SearchPage::$listLayout);

        $I->wait(1);
    }
}