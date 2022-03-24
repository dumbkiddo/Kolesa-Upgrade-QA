<?php
namespace Helper;

use Faker\Provider\Base;

/**
 * Класс кастомного фейкера для заполнения формы
 */
class CustomFakerProvider extends Base
{
    /**
     * Коды для номеров в KZ формате
     */
    protected $phoneCodes = [
        '701',
        '702',
        '707',
        '771',
        '775'
    ];

    /**
     * Номера карт
     */
    protected $creditCardNumbers = [
        '4556252648229828',
        '4929565555976135',
        '4716993554009350',
        '4532682430185680',
        '4195611335199023'
    ];

    /**
     * Срок действия карты (год)
     */
    protected $creditCardExpirationYear = [
        '2022',
        '2023',
        '2024',
        '2025',
        '2026'
    ];

    /**
     * Возвращает рандомный номер в KZ формате
     */
    public function getPhoneKZ()
    {
        return sprintf(
            '+7(%d)%d-%d-%d',
            $this->phoneCodes[array_rand($this->phoneCodes)],
            rand(100, 999),
            rand(10, 99),
            rand(10, 99)
        );
    }

    /**
     * Возвращает номер карты
     */
    public function getCreditCardNumber()
    {
        return sprintf(
            '%s',
            $this->creditCardNumbers[array_rand($this->creditCardNumbers)]
        );
    }

    /**
     * Возвращает 3 цифры для CCV
     */
    public function getCcvCode()
    {
        return sprintf(
            '%d',
            rand(001, 999)
        );
    }

    /**
     * Возвращает срок действия карты
     */
    public function getExpirationYear()
    {
        return sprintf(
            '%s',
            $this->creditCardExpirationYear[array_rand($this->creditCardExpirationYear)]
        );
    }
}