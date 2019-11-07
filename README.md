
# Instalation of Customers API

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