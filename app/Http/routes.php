<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'Pantry App';
});

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'as' => 'admin'], function() {
    Route::get('/', [
        'uses' => 'AdminController@index'
    ]);
    
    Route::get('/recipe/new', [
        'uses' => 'RecipeController@create',
        'as' => '.new'
    ]);
    
    Route::post('/recipe/new', [
        'uses' => 'RecipeController@store',
        'as' => '.new'
    ]);
    
    Route::get('/recipe/{id}', [
        'uses' => 'RecipeController@show',
        'as' => '.show'
    ]);

    Route::get('/recipe/{id}/edit', [
        'uses' => 'RecipeController@edit',
        'as' => '.edit'
    ]);

    Route::match(['put', 'patch'], '/recipe/{id}', [
        'uses' => 'RecipeController@update',
        'as' => '.update'
    ]);
    
    Route::get('/pantry', [
        'uses' => 'PantryController@index',
        'as' => '.pantry'
    ]);

    Route::post('/pantry', [
        'uses' => 'PantryController@store',
        'as' => '.pantry'
    ]);

    Route::get('/pantry/{id}', [
        'uses' => 'PantryController@delete',
        'as' => '.pantry.delete'
    ]);
});
