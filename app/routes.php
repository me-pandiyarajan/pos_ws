<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


/*
*	product 
*/

Route::get("product/all", [
    "as"   => "product/index",
    "uses" => "ProductController@index"
]);

Route::get("product/{id}", [
    "as"   => "product/show",
    "uses" => "ProductController@show"
]);

Route::get("product/underCategory/{id}", [
    "as"   => "product/getProductsByCategory",
    "uses" => "ProductController@getProductsByCategory"
]);



/*
*	product's category 
*/

Route::get("category/all", [
    "as"   => "category/index",
    "uses" => "CategoryController@index"
]);

Route::get("category/{id}", [
    "as"   => "category/show",
    "uses" => "CategoryController@show"
]);

Route::get("category/getProductsFor/{id}", [
    "as"   => "category/getProducts",
    "uses" => "CategoryController@getProducts"
]);

