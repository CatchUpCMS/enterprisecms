<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Routes in this group must be authorized.
Route::group([
], function (Router $router) {
    $router->get('/', ['as' => 'modules.core.companies', 'uses' => 'CompaniesController@manager']);
});
//->middleware('auth:api');
