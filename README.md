## About
A simple CRUD functionality of Products and their Categories. This involves basic Eloquent Relationship.

## Installation 
1. Clone this repo to your root directory (e.g. htdocs, www).
   1. `git clone https://github.com/lyndonjohn/laravel-eloquent.git`
2. Open your terminal and CD to `laravel-eloquent` and run `composer install` to install dependencies.
3. Create a copy of `.env.example` to `.env` by typing `cp .env.example .env` in your terminal and press enter.
4. Open `.env` file edit database configuration according to your local environment setup.
   - Make sure that the database specified in `DB_DATABASE` exists before continuing to step 5.
5. Run migration.
   1. `php artisan migrate`
6. Serve the project by running `php artisan serve` or if you're using Laragon, you can use http://laravel-eloquent.test
