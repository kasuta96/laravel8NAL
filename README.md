<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Clone & Run this example
Clone the repository
```
git clone https://github.com/kasuta96/laravel8NAL.git
```
Switch to the app folder
```
cd laravel8NAL
```
Install all laravel library using composer
```
composer install
```
Copy env file
```
cp .env.example .env
```
- create database
- edit DB infomation on .env
Run the database migrations
```
php artisan migrate
```
Generate a new application key
```
php artisan key:generate
```
Start local server
```
php artisan serve
```
Access the server at http://localhost:8000

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
