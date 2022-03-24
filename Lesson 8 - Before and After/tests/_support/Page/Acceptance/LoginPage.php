<?php
namespace Page\Acceptance;

class LoginPage
{
    /**
     * URL страницы авторизации
     */
    public static $URL = '/index.php?controller=authentication&back=my-account';

    /**
     * Email для авторизации
     */
    public const EMAIL = 'amiralina@kolesa.kz';

    /**
     * Пароль для авторизации
     */
    public const PASSWORD = 'L5Yb94SYj..FVLF';

    /**
     * Селектор для поля email
     */
    public static $emailField = '//input[@id="email"]';

    /**
     * Селектор для поля пароля
     */
    public static $passwordField = '//input[@id="passwd"]';

    /**
     * Селектор кнопки авторизации
     */
    public static $loginButton = '//button[@id="SubmitLogin"]';

    /**
     * Селектор кнопки выхода из аккаунта
     */
    public static $logoutButton = '//a[@class="logout"]';

    /**
     * Авторизуется через email и пароль пользователя
     */
    public function logIn()
    {
        $this->acceptanceTester->amOnPage(LoginPage::$URL);
        $this->acceptanceTester->fillField(self::$emailField, self::EMAIL);
        $this->acceptanceTester->fillField(self::$passwordField, self::PASSWORD);
        $this->acceptanceTester->click(self::$loginButton);
        $this->acceptanceTester->seeInCurrentUrl('/index.php?controller=my-account');

        return $this;
    }

    /**
     * Выходит из кабинета пользователя
     */
    public function logOut()
    {
        $this->acceptanceTester->click(self::$logoutButton);

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
