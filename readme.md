# Laravel RestFul api

## Project Setup

1. install Xampp
2. install composer

## create project

`composer create-project laravel/laravel RestfulApi`

`php artisan make:model Model/Product -a`

create migration ,factory and resource controller

`php artisan make:model Model/Review -a`

## setup database

1. add product table
2. add review table
3. appseviceProvider.php
   add this line
   `use Illuminate\Support\Facades\Schema;

    public function boot()  
    {  
    Schema::defaultStringLength(191);  
    }  `

`php artisan migrate`
