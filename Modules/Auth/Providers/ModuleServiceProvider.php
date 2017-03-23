<?php

namespace Modules\Auth\Providers;

use Modules\Core\Providers\BaseModuleProvider;
use Caffeinated\Modules\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;


class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register the defined middleware.
     *
     * @var array
     */
    protected $middleware = [
        'Auth' => [
            'hasRole' => 'HasRoleMiddleware',
            'hasPermission' => 'HasPermissionMiddleware',
        ],
    ];

    /**
     * The commands to register.
     *
     * @var array
     */
    protected $commands = [
        'Auth' => [
            'make:user' => 'MakeUserCommand',
            'module:publish-permissions' => 'ModulePublishPermissionsCommand',
        ],
    ];

    /**
     * Register repository bindings to the IoC.
     *
     * @var array
     */
    protected $bindings = [
        'Cms\Modules\Auth\Repositories\User' => ['RepositoryInterface' => 'EloquentRepository'],
        'Cms\Modules\Auth\Repositories\Role' => ['RepositoryInterface' => 'EloquentRepository'],
    ];



    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'auth');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'auth');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'auth');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        parent::register();

        // override some config settings
/*
        $userModel = 'Cms\Modules\Auth\Models\User';
        config(['cms.auth.config.user_model' => $userModel]);
        config(['auth.table' => with(new $userModel())->getTable()]);

        // attach view composer to the login & register form
        view()->composer('theme.*::views.partials.core._login_form', 'Cms\Modules\Auth\Composers\Recaptcha@loginForm');
        view()->composer('theme.*::views.partials.core._register_form', 'Cms\Modules\Auth\Composers\Recaptcha@registerForm');
*/
    }
}
