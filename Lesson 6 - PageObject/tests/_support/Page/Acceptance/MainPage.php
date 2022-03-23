<?php
namespace Page\Acceptance;

class MainPage
{
    /**
     * URL главной страницы
     */
    public static $URL = '';

    /**
     * Селектор раздела "Dresses" в главном меню
     */
    public static $dressesMenu = '(//a[@title="Dresses"])[2]';

    /**
     * Селектор подраздела "Summer Dresses" в главном меню
     */
    public static $summerDressesCatalog = '(//a[@title="Summer Dresses"])[2]';

    /**
     * Конструктор
     */
    protected $acceptanceTester;

    /**
     *  Метод конструктора
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Переходит в подраздел "Summer Dresses" через главное меню
     */
    public function openSummerDressesPage()
    {
        $this->acceptanceTester->moveMouseOver(self::$dressesMenu);
        $this->acceptanceTester->waitForElementVisible(self::$summerDressesCatalog);
        $this->acceptanceTester->click(self::$summerDressesCatalog);

        return new MainPage($this->acceptanceTester);
    }
}