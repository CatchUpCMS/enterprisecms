<?php

namespace Modules\Auth\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Modules\Auth\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();


/*
        Route::bind('auth_user', function ($user) {
            $model = config('cms.auth.config.user_model');

            return with(new $model())->where('username', $user)->firstOrFail();
        });

        Route::bind('auth_user_id', function ($id) {
            $model = config('cms.auth.config.user_model');

            return with(new $model())->findOrFail($id);
        });

        Route::bind('auth_role_id', function ($id) {
            return with(new \Modules\Auth\Models\Role())->with('permissions')->findOrFail($id);
        });

        Route::bind('auth_apikey_id', function ($id) {
            return with(new \Modules\Auth\Models\ApiKey())->findOrFail($id);
        });
*/



    }

    /**
     * Define the routes for the module.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();

        $this->mapApiRoutes();

        //
    }

    /**
     * Define the "web" routes for the module.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
        ], function ($router) {
            require module_path('auth', 'Routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the module.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace'  => $this->namespace,
            'prefix'     => 'api',
        ], function ($router) {
            require module_path('auth', 'Routes/api.php');
        });
    }
}
