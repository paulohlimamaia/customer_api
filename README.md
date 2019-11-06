
# Instalation of Customers API

## Envorimental Variables

You need to setup [.env](.env) with the correct database variables for your workspace such as:
 1. **DB_CONNECTION**
 2. **DB_HOST**
 3. **DB_PORT**
 4. **DB_DATABASE**
 5. **DB_USERNAME**
 6. **DB_PASSWORD**.

## Preparing and Running

Next you need to run the following commands in order to serve the *API*:

1.  ```composer install```
2. ```php artisan migrate --seed``` (***this may take a while***)
3. ```php artisan serve```