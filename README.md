# laravel-test
Демо новостного сайта на Laravel

## Разворачивание проекта

### Стек
1. MySQL > v.8.4
2. PHP > v.8.1

Для установки и разворачивания данного фреймворка Вам необходимо:
1. Настроить конфигурацию в файле .env (скопировать из .env.example)
2. провести миграции
```shell
php artisan migrate
```



P.s. Не забудьте настроить окружение Nginx/Apache2 для отображение контента по http
