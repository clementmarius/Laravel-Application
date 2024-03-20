# Laravel 11 starter kit

## Prerequisites

```
sqlite3 --version
# 3.37.2
php --version
# 8.3.4
node --version
# 20.11.0
npm --version
# 10.2.4
composer --version
# 2.7.2
git --version
# 2.34.1
```

[Installation on Linux from scratch](https://saaslit.com/blog/laravel/how-to-install-laravel-11-on-linux)

## Local installation

```
composer install
```

Wait for a minute, then

```shell
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate --ansi
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"

```


## Launch the server locally

```
php artisan serve
```