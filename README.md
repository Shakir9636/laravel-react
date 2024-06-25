<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Run Command
composer create-project laravel/laravel laravel11-react-inertia

//authentication
composer require laravel/breeze --dev
php artisan breeze:install

php artisan serve
npm run dev
php artisan tinker

//query data print and database in object like id ,name
php artisan tinker
\App\Models\Task::query()->paginate(5)->all()

//f = factory and m = migration
php artisan make:model Project -fm
php artisan make:model Task -fm


//seeder
php artisan migrate --seed

php artisan make:controller ProjectController --model=Project --requests --resource
php artisan make:controller TaskController --model=Task --requests --resource
php artisan make:controller UserController --model=User --requests --resource

php artisan route:list
php artisan make:resource ProjectRecource
php artisan make:resource UserRecource

 php artisan storage:link

//tailwind.config.js
darkMode:'class'

