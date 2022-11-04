# Установка

-   Создать в корне .env согласно примеру (.env.example)
-   Установить зависимости бэка: `composer install`
-   Установить зависимости фронта: `npm i`
-   Создать локально БД и засидить данными

# Команды

-   Сбросить БД и запустить сидеры: `php artisan migrate:fresh --seed`
-   Запустить миграции `php artisan migrate`
-   Запустить Browser тесты: `php artisan dusk`
