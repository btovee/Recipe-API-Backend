<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('recipe/get-by-id/{recipeId}', 'RecipeApiController@getRecipe');
Route::get('recipes/get-by-cuisine/{cuisine}', 'RecipeApiController@getRecipesByCuisine');
Route::patch('recipe/update', 'RecipeApiController@updateRecipeFields');
