<?php
namespace Page\Acceptance;

/**
 * Страница авторизации
 */
class AuthErrorPage
{
    /**
     * URL страницы
     */
    public static $URL = '';

    /**
     * Логин заблокированного пользователя
     */
    public const BLOCKED_USERNAME = 'locked_out_user';

    /**
     * Пароль пользователя
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * Селектор поля логина
     */
    public static $usernameField = '//input[@id="user-name"]';

    /**
     * Селектор поля пароля
     */
    public static $passwordField = '//input[@id="password"]';

    /**
     * Кнопка авторизации
     */
    public static $loginButton = '#login-button';

    /**
     * Блок с сообщением об ошибке авторизации
     */
    public static $errorBlock = '//div[@class="error-message-container error"]';

    /**
     * Кнопка для закрытия блока с ошибкой
     */
    public static $closeErrorBlockButton = '//button[@class="error-button"]';

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
     * Вводит логин пользователя
     */
    public function enterUsername()
    {
        $this->acceptanceTester->fillField(self::$usernameField, self::BLOCKED_USERNAME);

        return $this;
    }

    /**
     * Вводит пароль пользователя
     */
    public function enterPassword()
    {
        $this->acceptanceTester->fillField(self::$passwordField, self::PASSWORD);

        return $this;
    }

    /**
     * Нажимает на кнопку авторизации
     */
    public function clickLoginButton()
    {
        $this->acceptanceTester->click(self::$loginButton);

        return $this;
    }

    /**
     * Нажимает на кнопку закрытия блока с ошибкой
     */
    public function closeErrorBox()
    {
        $this->acceptanceTester->click(self::$closeErrorBlockButton);

        return $this;
    }

}
