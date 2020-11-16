# skleponline
## General Info
This project was created to show my PHP programming skills with the Laravel framework.
The page that I created is a simple project containing elements of creating a table in the database, inserting data into a table, displaying it and modifying it.
Additionally, the program has the function of adding another record to the table.
This site is to become an online store in the future.
## Technologies
Project is created with:
* PHP 7.3.x
* Laravel 4.x
* Bootstrap 4.x
## Setup
If you want to run this program, create a new database called "skleponline" on your server.
Then configure the .env file accordingly:
```
DB_CONNECTION=mysql
DB_HOST=(for example: 127.0.0.1)
DB_PORT=(for example: 3306)
DB_DATABASE=skleponline
DB_USERNAME= your database username
DB_PASSWORD= your password
```
Later in the terminal enter the commands:
```
php artisan migrate
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=CategorySeeder
php artisan serve
```
The program should start.
