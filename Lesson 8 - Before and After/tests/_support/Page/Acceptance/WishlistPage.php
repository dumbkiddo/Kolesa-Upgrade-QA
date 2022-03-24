<?php
namespace Page\Acceptance;

class WishlistPage
{
    /**
     * Страница со списками избранного
     */
    public static $URL = '/index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * Количество добавленных в избранное продуктов
     */
    public static $numberOfAddedProducts = '//td[contains(@class, "align_center")]';

    /**
     * Селектор кнопки удаления из избранного
     */
    public static $removeProducts = '//td[@class="wishlist_delete"]/a';

    /**
     * Селектор кнопки для открытия всех списков избранных
     */
    public static $wishlistButton = '//span[normalize-space()="My wishlists"]';

    /**
     * Селектор таблицы всех списков избранных
     */
    public static $wishlistTable = '//div[@id="mywishlist"]';

    /**
     * Возвращает количество добавленных в избранное продуктов
     */
    public function getNumberOfAddedProducts()
    {
        return $this->acceptanceTester->grabTextFrom(self::$numberOfAddedProducts);
    }

    /**
     * Очищает список избранного
     */
    public function clearWishlist()
    {
        $this->acceptanceTester->click(self::$removeProducts);
        $this->acceptanceTester->acceptPopup();

        return $this;
    }

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
}
