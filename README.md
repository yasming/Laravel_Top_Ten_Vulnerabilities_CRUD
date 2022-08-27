# Top_Ten_Vulnerabilities_CRUD
> This project is an api crud of the top 10 vulnerabilities found here: https://owasp.org/www-project-top-ten/

## Problem
> 1. Create a crud with the top ten vulnerabilities found here: https://owasp.org/www-project-top-ten/
>
> 2. The first 10 vulnerabilities should already be in the project
>
> 3. We should be able to store, see all, see only one, update and delete the vulnerabilities
> 

## Requirements
> Docker

## Run project
> 1. 
```
docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs
```
>
> 2.```./vendor/bin/sail up -d```
## Run project tests
> ```./vendor/bin/sail artisan test``` 

## Solution
- Were used Actions Pattern
- Laravel Api resources: https://laravel.com/docs/9.x/eloquent-resources
- Laravel form request validation: https://laravel.com/docs/9.x/validation#form-request-validation
- Laravel tests with php unit: https://laravel.com/docs/9.x/testing
