
# Instalation of Customers API

## Server Requirements

1. PHP >= 7.2.0
2. BCMath PHP Extension
3. Ctype PHP Extension
4. JSON PHP Extension
5. Mbstring PHP Extension
6. OpenSSL PHP Extension
7. PDO PHP Extension
8. Tokenizer PHP Extension
9. XML PHP Extension

## Creating Database

First you need to create a new database using PostgreSQL or MySQL.

## Creating ***.env*** file

Run the following command on the project base folder:

```cp .env.example .env```

## Envorimental Variables

You need to setup [.env](.env) with the correct database variables for your workspace such as:
 1. **DB_CONNECTION**
 2. **DB_HOST**
 3. **DB_PORT**
 4. **DB_DATABASE** (*this is the name used when creating the database in the first step*)
 5. **DB_USERNAME**
 6. **DB_PASSWORD**.

## Preparing and Running

Next you need to run the following commands in order to serve the *API*:

1.  ```composer install```
2. ```php artisan migrate --seed``` (***this may take a while***)
3. ```php artisan key:generate```
4. ```php artisan serve```

## Accessing the Front End

The you just need to open the file [index.html](index.html) located in the root of the project on a browser of your choise that supports **ES6** for a simple tabled view of the data.

*You can also access the data by going in the address given by the command ```php artisan serve``` for a integrated view of the data from the API. (this address will likely be [localhost:8000](http://localhost:8000))*