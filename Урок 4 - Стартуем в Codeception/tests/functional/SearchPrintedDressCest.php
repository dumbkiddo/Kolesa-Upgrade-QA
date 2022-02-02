<?php
/**
 * Класс для проверки поиска
 */
class SearchPrintedDressCest
{
    /**
     * Проверка поиска товара «Printed dress»
     */
    public function searchPrintedDress(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->click('#search_query_top');
        $I->fillField("//input[@id='search_query_top']", 'Printed Dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > .product_list > .ajax_block_product > .product-container', '5');
    }
}
