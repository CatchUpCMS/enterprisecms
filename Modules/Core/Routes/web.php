<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', array(
        'uses' => 'FrontendController@frontend'
    ));

});


/*Route::group(['prefix' => '', 'middleware' => ['auth']], function () {
    Route::get('/', array(
        'uses' => 'FrontendController@frontend'
    ));

    Route::get('/landing', array(
        'uses' => 'FrontendController@landing'
    ));

});*/

Route::group(['prefix' => '/backend', 'middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/dashboard', 'HomeController@index');

    Route::resource('users', 'UserController');

    Route::get('roles', ['as' => 'roles.index', 'uses' => 'RolesController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create', ['as' => 'roles.create', 'uses' => 'RolesController@create', 'middleware' => ['permission:role-create']]);
    Route::post('roles/create', ['as' => 'roles.store', 'uses' => 'RolesController@store', 'middleware' => ['permission:role-create']]);
    Route::get('roles/{id}', ['as' => 'roles.show', 'uses' => 'RolesController@show']);
    Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RolesController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}', ['as' => 'roles.update', 'uses' => 'RolesController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RolesController@destroy', 'middleware' => ['permission:role-delete']]);

    Route::get('relations', ['as' => 'relations.index', 'uses' => 'RelationsController@index', 'middleware' => ['permission:relations-list|relations-create|relations-edit|relations-delete']]);
    Route::get('relations/create', ['as' => 'relations.create', 'uses' => 'RelationsController@create', 'middleware' => ['permission:relations-create']]);
    Route::post('relations/create', ['as' => 'relations.store', 'uses' => 'RelationsController@store', 'middleware' => ['permission:relations-create']]);
    Route::get('relations/{id}', ['as' => 'relations.show', 'uses' => 'RelationsController@show']);
    Route::get('relations/{id}/edit', ['as' => 'relations.edit', 'uses' => 'RelationsController@edit', 'middleware' => ['permission:relations-edit']]);
    Route::patch('relations/{id}', ['as' => 'relations.update', 'uses' => 'RelationsController@update', 'middleware' => ['permission:relations-edit']]);
    Route::delete('relations/{id}', ['as' => 'relations.destroy', 'uses' => 'RelationsController@destroy', 'middleware' => ['permission:relations-delete']]);
});



