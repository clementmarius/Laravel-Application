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
php artisan migrate --ansi
```

Then launch the server locally

```
php artisan serve
```

And open browser at http://localhost:8000

## Deploy to heroku


```
heroku create myapplaravel
```

Check you have the heroku remote

```shell
git remote -v
# heroku	https://git.heroku.com/myapplaravel.git (fetch)
# heroku	https://git.heroku.com/myapplaravel.git (push)
# origin	git@github.com:<githubuser>/myapplaravel.git (fetch)
# origin	git@github.com:<githubuser>/myapplaravel.git (push)
```

Generate a key

```shell
php artisan key:generate --show
```

Then copy/paste the generated key (replace "..." by the key)

```shell
heroku config:set APP_KEY=...
```

Then create a database on heroku

```shell
heroku addons:create heroku-postgresql:mini
```

Push to Heroku 

```shell
git push heroku main
```
