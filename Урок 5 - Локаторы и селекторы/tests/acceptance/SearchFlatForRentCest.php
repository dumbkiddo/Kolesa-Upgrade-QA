<?php
/**
 * Класс для проверки поиска квартир в аренду
 */
class SearchFlatForRentCest
{
    /**
     * Поиск квартиры в аренду
     */
    public function searchForFlat(AcceptanceTester $I)
    {
        $rentSectionLink = "//nav[@class='main-menu']//a[contains(@href,'arenda')]";

        $regionDropdown      = "//span[@class='region-dropdown-label']";
        $regionAlmaty        = "//div[@class='element-region-dropdown-selects']//option[@data-label='Алматы']";
        $regionConfirmButton = "//div[@class='leveled-select is-visible'][2]/a[@href='#']";

        $roomSelect = "//select[@name='das[live.rooms]']";
        $roomOption = "2 комн.";

        $priceRangeFrom = "//input[@name='das[price][from]']";
        $priceRangeTo   = "//input[@name='das[price][to]']";
        $priceValue     = "50000";

        $searchButton = "//button[@class='search-btn-main']";

        $cardHeader = "//div[@class='a-card__header-left'][1]";
        $cardRegion = "//div[@class='card-stats__item'][1]";
        $cardPrice  = "//div[@class='a-card__price'][1]";

        $I->amOnPage('');
        $I->click($rentSectionLink);
        $I->seeCurrentUrlEquals('/arenda/');

        $I->click($regionDropdown);
        $I->click($regionAlmaty);
        $I->waitForElementClickable($regionConfirmButton);
        $I->click($regionConfirmButton);

        $I->selectOption($roomSelect, $roomOption);
        $I->seeOptionIsSelected($roomSelect, $roomOption);

        $I->waitForElementVisible($priceRangeFrom);
        $I->click($priceRangeFrom);
        $I->fillField($priceRangeFrom, $priceValue);
        $I->waitForElementVisible($priceRangeTo);
        $I->click($priceRangeTo);
        $I->fillField($priceRangeTo, $priceValue);

        $I->click($searchButton);

        $I->waitForText('2-комнатная квартира', 10, $cardHeader);
        $I->waitForText('Алматы', 10, $cardRegion);
        $I->waitForText('50 000', 10, $cardPrice);
    }
}
