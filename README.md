Prerequisites :

Getting started Laravel 11 - Linux : 

# install dependencies
npm install
node install


## sqlite 3 
sudo apt update
sudo apt install sqlite3
sqlite3 --version

## PHP 8.3
sudo apt update && sudo apt upgrade -y
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt-get install -y php8.3-cli php8.3-sqlite3 php8.3-common php8.3-fpm php8.3-zip php8.3-gd php8.3-mbstring php8.3-curl php8.3-xml php8.3-bcmath
php --version


## composer install
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo cp composer.phar /usr/local/bin/composer
composer  --version


## Create a default Laravel 11 application
composer create-project laravel/laravel=11 MyApp

# Then launch the server:
php artisan serve

Access it at http://localhost:8000

The Laravel sample project is now up and running!

# Postscript if you don't create the app you might need few more commands 
## create .env file and generate the application key

cp .env.example .env
php artisan key:generate --ansi

Licence :

To be determined 
