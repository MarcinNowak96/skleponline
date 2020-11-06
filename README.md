# skleponline

This project was created to show my PHP programming skills with the Laravel framework.
The page that I created is a simple project containing elements of creating a table in the database, inserting data into a table, displaying it and modifying it.
Additionally, the program has the function of adding another record to the table.
This site is to become an online store in the future.

If you want to run this program, create a new database called "skleponline" on your server.
Then configure the .env file accordingly:
Find the DB_DATABASE line and enter 'skleponline' there.
Later in the terminal enter the commands:
php artisan migrate
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=CategorySeeder
php artisan serve
The program should start.
