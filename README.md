Laravel passport application

1. git clone the repository
2. create db football_db and ensure .env file is correct.
3. composer require laravel/ui --dev
4. php artisan migrate:refresh --seed
5. php artisan storage:link
6. php artisan passport:install
7. you will also need to update the file location of images locally:
This can be done in the playerSeeder file by changing the path of the images to suit your local environment.
8. you will need to php artisan migrate:refresh --seed again after step 7.
