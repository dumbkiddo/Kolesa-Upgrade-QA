## Урок 4 - Функциональное тестирование с помощью Codeception
### Темы
- #### Знакомство с Codeception
- #### Виды автотестов - Acceptance и Functional
- #### Selenium Webdriver/Chromedriver и Selenium Server
____
### Домашнее задание
### *Теория*

- [ ] Ознакомиться с документацией Codeception

### *Практика*
- [x] Установить себе Codeception, если не установили до этого урока


- [x] Написать 1 Functional-тест:
1. Зайти на http://automationpractice.com/index.php
2. В поле поиска написать «Printed dress»
3. Кликнуть на кнопку поиска
4. На странице результатов убедиться, что было найдено 5
   товаров (считать карточки товаров)

- [x] Написать 1 Acceptance-тест
1. Зайти на http://automationpractice.com/index.php
2. Найти на странице товар «Blouse»
3. Навести на него мышью
4. Кликнуть на кнопку «Quick view» внутри блока с товаром
5. Дождаться появления модального окна
6. Убедиться, что это нужный нам товар, проверив текст
   «Blouse» внутри модального окна

![img.png](img.png)

____
### Дополнительные материалы - ссылки

- [Официальная документация Codeception](https://codeception.com/docs/)
- [Что такое Selenium?](https://habr.com/ru/post/152653/)
- [Что такое Selenium WebDriver?](https://habr.com/ru/post/152971/)

- [ChromeDriver - скачать](https://chromedriver.storage.googleapis.com/index.html?path=90.0.4430.24/)
- [Composer - установка](https://getcomposer.org/download/)
- [О файле .gitignore](https://tyapk.ru/blog/post/gitignore)