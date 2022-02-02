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
        $I->amOnPage('');
        $I->scrollTo('#homefeatured > li:nth-child(2)');
        $I->moveMouseOver('#homefeatured > li:nth-child(2)');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->waitForElementVisible('.fancybox-iframe');
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForText('Blouse',20,'#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
