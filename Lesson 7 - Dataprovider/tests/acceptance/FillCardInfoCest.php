<?php

use Page\Acceptance\FormPage;
use Faker\Factory;
use Helper\CustomFakerProvider;

/**
 * Класс для проверки заполнения формы
 */
class FillCardInfoCest
{
    /**
     * Проверяем заполнение формы через фейкер c оплатой по карте
     */
    public function checkCreditCardPayment(AcceptanceTester $I)
    {
        $rusFaker = Factory::create('ru_RU');
        $engFaker = Factory::create('en_US');
        $rusFaker->addProvider(new CustomFakerProvider($rusFaker));

        $I->amOnPage('');
        $I->fillField(FormPage::$firstNameField, $rusFaker->firstName);
        $I->fillField(FormPage::$lastNameField, $rusFaker->lastName);
        $I->fillField(FormPage::$emailField, $rusFaker->email);
        $I->fillField(FormPage::$phoneField, $rusFaker->getPhoneKZ());
        $I->fillField(FormPage::$addressField, $rusFaker->address);
        $I->fillField(FormPage::$cityField, $rusFaker->city);
        $I->fillField(FormPage::$regionField, $rusFaker->region);
        $I->fillField(FormPage::$postalIndexField, $rusFaker->postcode);
        $I->click(FormPage::$productCheckbox);

        $I->click(FormPage::$creditCardCheckbox);
        $I->fillField(FormPage::$cardFirstNameField, $rusFaker->firstName);
        $I->fillField(FormPage::$cardLastNameField, $rusFaker->lastName);
        $I->fillField(FormPage::$cardNumberField, $rusFaker->getCreditCardNumber());
        $I->fillField(FormPage::$cardCcvField, $rusFaker->getCcvCode());
        $I->selectOption(FormPage::$cardExpiringMonthSelect, $rusFaker->monthName());
        $I->selectoption(FormPage::$cardExpiringYearSelect, $rusFaker->getExpirationYear());
        $I->fillField(FormPage::$cardAddressField, $rusFaker->address);
        $I->fillField(FormPage::$cardCityField, $rusFaker->city);
        $I->fillField(FormPage::$cardRegionField, $rusFaker->region);
        $I->fillField(FormPage::$cardPostalIndexField, $rusFaker->postcode);
        $I->selectoption(FormPage::$cardCountrySelect, $engFaker->country());
        $I->click(FormPage::$registerButton);

        $I->waitForText('Good job');
    }
}
