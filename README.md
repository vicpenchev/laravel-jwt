Laravel 5.7 and JWT Authentication
===================================

This is a simple implementation of [Json Web Token](https://jwt.io/)(JWT) Authentication with [Laravel 5.7](https://laravel.com/docs/5.7). It has some basic authentication functionalities set up.

## Requirements

* [Git](https://git-scm.com/).
* [PHP 7.1 or greater](http://php.net/).
* [Composer](https://getcomposer.org/).
* [Laravel CLI](https://laravel.com/docs/5.7/artisan).

## Install
### Clone the git repository on your local machine
```
$ git clone https://github.com/vicpenchev/laravel-jwt.git
```
If you don't have git, you can download the entire repository as a [zip file](https://github.com/vicpenchev/laravel-jwt/archive/master.zip) and unpack it on your local machine.

### After cloning the application, you need to install it's dependencies.
```
$ cd laravel-jwt
$ composer install
```

### When you are done with installation, copy the .env.example file to .env and configure the database if needed
```
$ cp .env.example .env
```

### Generate the application key
```
$ php artisan key:generate
```

### Generate JWT secret
```
php artisan jwt:secret
```

### Execute database migrations
```
php artisan migrate
```

### Run the application
```
$ php artisan serve
```
