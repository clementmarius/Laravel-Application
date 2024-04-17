# Laravel 11 starter kit

## Prerequisites

```
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
psql --version
# 14.11
```

If you have Ubuntu-based distribution, you can install php and composer with

 * [Laravel on Linux from scratch](https://saaslit.com/blog/laravel/how-to-install-laravel-11-on-linux)

## Install a database locally

```shell
sudo -u postgres psql
```

Then

```sql
CREATE DATABASE myapplaravel_db;
CREATE USER myapplaravel_user WITH PASSWORD 'myapplaravel_pwd';
GRANT ALL PRIVILEGES ON DATABASE myapplaravel_db TO myapplaravel_user;
\q
```


## Local installation

```
composer install
```

Wait for a minute, then

```shell
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate --ansi
php artisan migrate --ansi
```

Run npm install to install all the dependencies
```
npm install
```

Then seed the database, this will create the default roles and default user( mail adress = 'admin@user.com' , password = 'Secret1*3*5*' ) 
```
php artisan db:seed
```

Launch local assets watching & compilation

```
npm run dev
```


In an other window launch the server locally

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
# base64:mylongkey
```

Then copy/paste the generated key (replace "base64:mylongkey" by the actually generated key)

```shell
heroku config:set APP_KEY=base64:mylongkey
```

Then create a database on heroku

```shell
heroku addons:create heroku-postgresql:mini
heroku config:set DB_CONNECTION=pgsql
```

Read DATABASE_URL by typing

```shell
heroku config:get DATABASE_URL
# postgres://dbusername:dbpassword@dbhost:dbport/dbname
```

So now you have dbusername, dbpassword, etc (actual values are complicated, long String)

You can as well call the function in your terminal and add the DATABASE_URL, it will, you set up those followings information

```shell
heroku config:set DB_USERNAME=dbusername
heroku config:set DB_PASSWORD=dbpassword
heroku config:set DB_HOST=dbhost
heroku config:set DB_PORT=dbport
heroku config:set DB_DATABASE=dbname
```

Set the actual values inside heroku, like this :

```shell
heroku config:set DB_USERNAME=dbusername
heroku config:set DB_PASSWORD=dbpassword
heroku config:set DB_HOST=dbhost
heroku config:set DB_PORT=dbport
heroku config:set DB_DATABASE=dbname
```

You must update your .env file and add to it the following line, otherwise your assets might not load while you are deploying to Heroku
```
ASSET_URL=https://your-app.herokuapp.com
```

Push to Heroku 

```shell
git add . && git commit -m 'ready for production'
git push heroku main
```

Wait for two minutes, this first build could be long.

Then run the first migration, like this

```shell
heroku run bash
$> php artisan migrate --ansi
# Application in production, are you sure you want to run this command?
# (answer yes)

```

If migration is successful, you can exit the heroku bash with

```shell
$> exit
```

Go back to your heroku dashboard, your application is now live!

