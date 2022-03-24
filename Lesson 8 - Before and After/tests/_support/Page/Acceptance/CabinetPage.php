<?php
namespace Page\Acceptance;

class CabinetPage
{
    /**
     * URL страницы кабинета
     */
    public static $URL = '/index.php?controller=my-account';

    /**
     * Селектор кнопки Избранное
     */
    public static $wishlistButton = '//li[@class="lnk_wishlist"]';

    /**
     * Переходит в список избранного
     */
    public function goToMyWishlists()
    {
        $this->acceptanceTester->waitForElementClickable(self::$wishlistButton);
        $this->acceptanceTester->click(self::$wishlistButton);

        return new WishlistPage($this->acceptanceTester);
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
