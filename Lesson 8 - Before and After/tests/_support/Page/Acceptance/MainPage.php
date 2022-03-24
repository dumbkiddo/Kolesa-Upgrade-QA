<?php
namespace Page\Acceptance;

class MainPage
{
    /**
     * Селектор для первой карточки продукта
     */
    public static $productCard = '//ul[@id="homefeatured"]//li[contains(@class, "ajax_block_product")][%s]';

    /**
     * Селектор кнопки для быстрого просмотра продукта
     */
    public static $quickViewButton = '//ul[@id="homefeatured"]//li[%s]//a[@class="quick-view"]';

    /**
     * Селектор для iframe при быстром просмотре
     */
    public static $productCardIframe = '.fancybox-iframe';

    /**
     * Селектор кнопки добавления в избранное
     */
    public static $addToWishlistButton = '//a[@id="wishlist_button"]';

    /**
     * Селектор кнопки закрытия сообщения об успешном добавлении продукта в избранное
     */
    public static $closeMessageButton = '//body[@id="product"]//a[@title="Close"]';

    /**
     * Селектор кнопки для закрытия iframe
     */
    public static $closeIframeButton = '#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a';

    /**
     * Селектор кнопки для перехода в кабинет
     */
    public static $goToCabinetButton = '//div[@class="header_user_info"][1]';

    /**
     * Переходит в кабинет пользователя
     */
    public function goToMyAccount()
    {
        $this->acceptanceTester->click(MainPage::$goToCabinetButton);
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
