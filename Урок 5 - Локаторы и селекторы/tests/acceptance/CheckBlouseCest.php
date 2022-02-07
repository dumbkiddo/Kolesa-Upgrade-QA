<?php
/**
 * Класс для проверки быстрого просмотра
 */
class CheckBlouseCest
{
    /**
     * Проверка быстрого просмотра у товара "Blouse"
     */
    public function checkBlouse(AcceptanceTester $I)
    {
        $blouseProduct   = "#homefeatured li:nth-child(2)";
        $quickViewButton = '#homefeatured li:nth-child(2) a.quick-view';
        $quickViewFrame  = ".fancybox-iframe";
        $blouseHeader    = "#product h1";

        $I->amOnPage('');
        $I->scrollTo($blouseProduct);
        $I->moveMouseOver($blouseProduct);

        $I->click($quickViewButton);
        $I->waitForElementVisible($quickViewFrame);
        $I->switchToIFrame($quickViewFrame);
        $I->waitForText('Blouse', 20, $blouseHeader);
    }
}