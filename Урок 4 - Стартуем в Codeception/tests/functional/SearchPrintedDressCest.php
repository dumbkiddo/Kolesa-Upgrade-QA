<?php

class SearchPrintedDressCest
{
    public function searchPrintedDress(AcceptanceTester $I)
    {
        # 1. Зайти на http://automationpractice.com/index.php
        $I->amOnPage('');

        # 2. В поле поиска написать «Printed dress»
        $I->click('#search_query_top');
        $I->fillField("//input[@id='search_query_top']", 'Printed Dress');

        # 3. Кликнуть на кнопку поиска
        $I->click('#searchbox > button');

        # 4. На странице результатов убедиться, что было найдено 5 товаров (считать карточки товаров)
        $I->seeNumberOfElements('#center_column > .product_list > .ajax_block_product > .product-container', '5');
    }
}
