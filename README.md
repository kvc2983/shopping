# shopping
PHP Symfony shopping cart 


## Requirements

- composer
- php >= 7.3
- mysql >= 5.0.2

## Installation
### Webserver


- run `git clone https://github.com/kvc2983/shopping.git` command to clone repository on local folder
- Inside the symfony directory run Following command
- run `composer install` command
- add database on your mysql server Ex. I named it as shopping_cart
- copy `.env` file to `.env.local` and type your local environment variables, eg. mysql connection
- run `php bin/console doctrine:migrations:migrate` to add database tables

- You can access through  http://127.0.0.1:8000/
