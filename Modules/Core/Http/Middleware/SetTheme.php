<?php

namespace Modules\Core\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;


use App;
use Closure;
use Cache;
use Config;
use Redirect;
use Setting;
use Theme;
use View;


//class SetTheme implements Middleware {
class SetTheme
{


    public function __construct(
        Application $app,
        Redirector $redirector,
        Request $request
    )
    {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
    }

    public function handle($request, Closure $next)
    {
        Cache::forget('theme');

        $site_id = 1;
        $site_theme_slug = Config::get('themes.active', 'default');

        $theme = Cache::get($site_id . '_' . 'theme', $site_theme_slug);

        /*$theme = Cache::get($site_id . '_' . 'theme', $site_theme_slug);
        $theme = explode('_', $theme);
        $theme = $theme[1];*/
        //Config::get('themes.active', 'bootstrap')
        //Theme::setActive($theme);
        if ($theme == null) {
            $theme = Config::get('themes.active', 'default');
            Theme::setActive($theme);
            Cache::forever('theme', $theme);
        } elseif ($theme == 'default' || $theme == 'bootstrap') {
            //$theme = Setting::get('active_theme', Config::get('themes.active', 'global'));
            //Theme::setActive($theme);
        }

        View::share('activeTheme', $theme);
        View::share('theme_back', $theme . '::' . Config::get('themes.back', $theme . '::' . '_layouts.back'));
        View::share('theme_front', $theme . '::' . Config::get('themes.front', $theme . '::' . '_layouts.front'));
        View::share('theme_simple', $theme . '::' . Config::get('themes.simple', $theme . '::' . '_layouts.simple'));

        View::share('theme_manager', $theme . '::' . Config::get('themes.manager', $theme . '::' . '_layouts.manager'));
        View::share('theme_agent', $theme . '::' . Config::get('themes.agent', $theme . '::' . '_layouts.agent'));
        View::share('theme_client', $theme . '::' . Config::get('themes.client', $theme . '::' . '_layouts.client'));

        return $next($request);

    }


}
