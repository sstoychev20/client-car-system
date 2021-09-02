# client-car-system

cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve

mysql
create database laravel;
exit;

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}

php artisan migrate:fresh --seed