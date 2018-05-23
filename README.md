# Laravel Tabler
Laravel Package for integrating Tabler template and this package is Laravel Mix friendly. Currently this package can be integrated easily only on fresh installation.

# Installation
```bash
composer require guszandy/laravel-tabler
```
If you are using Laravel 5.5 above skip this step, but if aren't then add this line on ```config/app.php```, on  ```providers```
```php
'providers' => [
  ...
  GusZandy\Tabler\Providers\AppServiceProvider::class,
  ...
]
```
And then run,
```bash
php artisan make:tabler
```
Let's see what we've install. First, make sure that you already ran ```php artisan migrate``` command, then do
```bash
php artisan serve
```
Viola! You've running a Laravel site using Tabler.
