# Recipe API Backend

## Overview

- A small API to retrieve information about recipes.  

 - Use Case 1: As an API client I want to see a recipe's details
    - Example:
        - Make a GET request to "/api/recipe/get-by-id/1"
        - Response will be a JSON object with all the recipe data associated with recipe ID 1
 - Use Case 2: As an API client I want to see a paginated list of recipes by cuisine
    - Example: 
        - Make a GET request to "/api/recipes/get-by-cuisine/british"
        - Response will be a JSON object with all the recipes of cuisine type british
 - Use Case 3: As an API client I want to update one or more recipe's fields
    - Example: 
        - Make a PATCH request to "/api/recipe/update" with the fields you wish to update in the body.
        - The data source with be updated (CSV file) and a success JSON response will be sent.
        

## Requirements

- PHP >= 7.1.3
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- composer

## Development

### Laravel

You can use the following “composer” command to install the necessary laravel modules. 
<code>
composer install
</code>

If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command.  
This command will start a development server at http://localhost:8000:  
<code>
php artisan serve
</code>

## Testing 

You can run your PHPUnit tests by running the phpunit command:  
<code>
./vendor/bin/phpunit
</code>
