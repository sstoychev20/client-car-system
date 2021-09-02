# client-car-system

cp .env.example .env <br>
composer install  <br>
php artisan key:generate <br>
php artisan cache:clear && php artisan config:clear <br>
php artisan serve <br>
 
mysql <br>
create database laravel; <br>
exit; <br>

DB_CONNECTION=mysql <br>
DB_HOST=localhost <br>
DB_PORT=3306 <br>
DB_DATABASE=laravel <br>
DB_USERNAME={USERNAME} <br>
DB_PASSWORD={PASSWORD} <br>

php artisan migrate:fresh --seed
