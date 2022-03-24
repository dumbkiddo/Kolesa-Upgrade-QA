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
        $searchField  = "#search_query_top";
        $searchButton = "//button[@name='submit_search']";
        $allProducts  = "//div[@class='product-container']";

        $I->amOnPage('');
        $I->click($searchField);
        $I->fillField($searchField, 'Printed Dress');
        $I->click($searchButton);
        $I->seeNumberOfElements( $allProducts, '5');
    }
}
