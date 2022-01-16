<?php

class CheckBlouseCest
{
    public function checkBlouse(AcceptanceTester $I)
    {
        # Зайти на http://automationpractice.com/index.php
        $I->amOnPage('');

        # Найти на странице товар «Blouse»
        $I->scrollTo('#homefeatured > li:nth-child(2)');

        # Навести на него мышью
        $I->moveMouseOver('#homefeatured > li:nth-child(2)');

        #Кликнуть на кнопку «Quick view» внутри блока с товаром
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');

        # Дождаться появления модального окна
        $I->waitForElementVisible('.fancybox-iframe');
        $I->switchToIFrame('.fancybox-iframe');

        # Убедиться, что это нужный нам товар, проверив текст «Blouse» внутри модального окна
        $I->waitForText('Blouse',20,'#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
