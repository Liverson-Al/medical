docker compose up -d 

docker exec -it app bash

composer update

php artisan migrate:fresh --seed
