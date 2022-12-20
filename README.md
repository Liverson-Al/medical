Для работы через докер нужно написать эти команды
- docker compose up -d
- docker exec -it app bash
- composer update
- php artisan migrate --seed

СБРОС ДАННЫХ В БД И ИХ АВТОЗАПОЛНЕНИЕ, ДЕЛАТЬ ТОЛЬКО ЛОКАЛЬНО/ПРИ ПЕРВОМ ЗАПУСКЕ 
 - php artisan migrate:fresh --seed
