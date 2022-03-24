<?php
namespace Page\Acceptance;

class FormPage
{
    /**
     * Селектор для имени
     */
    public static $firstNameField = '#firstName';

    /**
     * Селектор для фамилии
     */
    public static $lastNameField = '#lastName';

    /**
     * Селектор для email
     */
    public static $emailField = 'input[type=email]';

    /**
     * Селектор для номера телефона
     */
    public static $phoneField = '#phoneNumber';

    /**
     * Селектор для адреса
     */
    public static $addressField = '#address';

    /**
     * Селектор для города
     */
    public static $cityField = '#city';

    /**
     * Селектор для региона/штата
     */
    public static $regionField = '#state';

    /**
     * Селектор для почтового индекса
     */
    public static $postalIndexField = '#postal';

    /**
     * Селектор чекбокса продукта
     */
    public static $productCheckbox = '#input_32_1004';

    /**
     * Селектор для оплаты картой
     */
    public static $creditCardCheckbox = '#input_32_paymentType_credit';

    /**
     * Селектор для имени в данных карты
     */
    public static $cardFirstNameField = "#input_32_cc_firstName";

    /**
     * Селектор для фамилии в данных карты
     */
    public static $cardLastNameField = '#input_32_cc_lastName';

    /**
     * Селектор для номера карты
     */
    public static $cardNumberField = '#input_32_cc_number';

    /**
     * Селектор для кода безопасности CCV
     */
    public static $cardCcvField = '#input_32_cc_ccv';

    /**
     * Селектор для месяца
     */
    public static $cardExpiringMonthSelect = '#input_32_cc_exp_month';

    /**
     * Селектор для года
     */
    public static $cardExpiringYearSelect = '#input_32_cc_exp_year';

    /**
     *  Селектор адреса для выставления счета
     */
    public static $cardAddressField = '#input_32_addr_line1';

    /**
     *  Селектор города для выставления счета
     */
    public static $cardCityField = '#input_32_city';

    /**
     *  Селектор региона/штата для выставления счета
     */
    public static $cardRegionField = '#input_32_state';

    /**
     *  Селектор почтового индекса для выставления счета
     */
    public static $cardPostalIndexField = '#input_32_postal';

    /**
     *  Селектор страны для выставления счета
     */
    public static $cardCountrySelect = '#input_32_country';

    /**
     *  Селектор кнопки "Регистрация" (Register)
     */
    public static $registerButton = 'button[type=submit]';
}
