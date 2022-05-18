## Project About
Demo: http://shopinvest.suntech.edu.vn/

Login with:
- email: admin@shopinvest.dev.com
- password: 123456

Technology:

    Laravel: ^8.40

    PHP 7.4.14

    Mysql: 5.7

    Boostrap: 5.x

## Setup Guide

- **Step 1**. Create a empty database

  DB collation: utf8_general_ci


- **Step 2**. Clone code

  Run command: `git clone git@github.com:htkhoi/shop-invest.git`


- **Step 3**. Go to folder project

  Run command: `cd shop-invest`

- **Step 4**. Make folder and chmod permission

    - `sudo mkdir storage/framework/sessions`
    - `sudo mkdir storage/framework/views`
    - `sudo chmod -R 777 storage`


- **Step 5**.  Run composer install

  Run command:  `composer install `


- **Step 6**. Create a file .env

  Run command: `sudo cp .env.example .env`

- **Step 7**. Open file .env to config like under

  DB_DATABASE=your_database_name

  DB_USERNAME=your_user_root

  DB_PASSWORD=your_password

- **Step 8**. Run command `php artisan key:generate`

- **Step 9**. Run command `php artisan storage:link`

- **Step 10**. Run command `php artisan migrate`

- **Step 11**. Run command `php artisan db:seed`
