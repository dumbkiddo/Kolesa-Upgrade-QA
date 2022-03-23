<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * URL страницы "Summer dresses"
     */
    public static $URL = '/index.php?id_category=11&controller=category';

    /**
     * Селектор кнопки Grid
     */
    public static $gridLayoutButton = 'li#grid';

    /**
     * Селектор раскладки в виде Grid
     */
    public static $gridLayout = 'ul.grid';

    /**
     * Селектор кнопки List
     */
    public static $listLayoutButton = 'li#list';

    /**
     * Селектор раскладки в виде List
     */
    public static $listLayout = 'ul.list';

    /**
     * Конструктор
     */
    protected $acceptanceTester;

    /**
     * Метод конструктора
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Проверяет нахождение на странице "Summer Dresses"
     */
    public function checkSummerDressesPage()
    {
        $this->acceptanceTester->seeInCurrentUrl(self::$URL);

        return $this;
    }

    /**
     * Проверяет раскладку в виде Grid
     */
    public function checkGridLayout()
    {
        $this->acceptanceTester->seeElement(self::$gridLayoutButton);

        return $this;
    }

    /**
     * Проверяет смену раскладки из Grid в List
     */
    public function changeLayoutToList()
    {
        $this->acceptanceTester->click(self::$listLayoutButton);

        return $this;
    }
}