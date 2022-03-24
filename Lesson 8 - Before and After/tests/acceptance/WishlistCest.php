<?php

use Page\Acceptance\CabinetPage;
use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\WishlistPage;
use Step\Acceptance\WishlistStep;

/**
 * Класс для проверки избранного
 */
class WishlistCest
{
    /**
     * Авторизуется на сайте
     */
    public function _before(\AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        $loginPage->logIn();
    }

    /**
     * Проверяет добавление продукта в избранное
     */
    public function checkAddToWishlist(\Step\Acceptance\WishlistStep $I)
    {
        $wishlistPage = new WishlistPage($I);
        $mainPage = new MainPage($I);
        $accountPage = new CabinetPage($I);

        $I->amOnPage('');
        $I->addProductToWishlist();
        $mainPage->goToMyAccount();
        $accountPage->goToMyWishlists();
        $I->assertEquals($wishlistPage->getNumberOfAddedProducts(), WishlistStep::PRODUCTS_NMB);
    }

    /**
     * Очищает список избранного и выходит из кабинета пользователя
     */
    public function _after(\AcceptanceTester $I)
    {
        $wishlistPage = new WishlistPage($I);
        $I->click(WishlistPage::$wishlistButton);
        $I->waitForElementVisible(WishlistPage::$wishlistTable);
        $wishlistPage->clearWishlist();

        $loginPage = new LoginPage($I);
        $loginPage->logOut();
    }
}
