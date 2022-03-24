<?php
/**
 * Класс для проверки рендеринга страницы Застройщика
 */
class CheckBuilderPageCest
{
    /**
     * Проверка страницы Застройщика
     */
    public function checkBuilderPageLoad(AcceptanceTester $I)
    {
        $complexSectionLink = "//nav[@class='main-menu']//a[contains(@href,'/complex/search/')]";
        $builderCatalogLink = "//a[contains(@href,'/zastroyshik/search')]";

        $builderPageLink  = "//a[contains(@href,'/zastroyshik/bonuslid/')]";
        $builderHeader    = "//h1[@class='builder-header__title']";
        $builderSlider    = "//section[@id='stocks']";
        $builderComplexes = "#residential-complexes";
        $builderOffices   = "#sales-offices";
        $builderInfo      = "#about-the-developer";

        $I->amOnPage('');
        $I->click($complexSectionLink);
        $I->click($builderCatalogLink);

        $I->click($builderPageLink);
        $I->seeCurrentUrlEquals('/zastroyshik/bonuslid');

        $I->seeElement($builderHeader);
        $I->seeElement($builderSlider);
        $I->seeElement($builderComplexes);
        $I->seeElement($builderOffices);
        $I->seeElement($builderInfo);
    }
}
