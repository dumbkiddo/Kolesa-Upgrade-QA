<?php
namespace Step\Acceptance;

use Page\Acceptance\MainPage;

class WishlistStep extends \AcceptanceTester
{
    public const PRODUCTS_NMB = 2;

    /**
     * Добавление продукта в избранное
     */
    public function addProductToWishlist(){
        $I = $this;

        for($i = 1; $i <= self::PRODUCTS_NMB; $i++)
        {
            $I->waitForElement(sprintf(MainPage::$productCard, $i));
            $I->moveMouseOver(sprintf(MainPage::$productCard, $i));
            $I->waitForElement(sprintf(MainPage::$quickViewButton, $i));
            $I->click(sprintf(MainPage::$quickViewButton, $i));
            $I->switchToIFrame(MainPage::$productCardIframe);
            $I->wait(2);

            $I->waitForElement(MainPage::$addToWishlistButton);
            $I->click(MainPage::$addToWishlistButton);
            $I->waitForElement(MainPage::$closeMessageButton);
            $I->waitForElementClickable(MainPage::$closeMessageButton);
            $I->click(MainPage::$closeMessageButton);
            $I->switchToIFrame();
            $I->click(MainPage::$closeIframeButton);
            $I->wait(2);
        }
    }
}