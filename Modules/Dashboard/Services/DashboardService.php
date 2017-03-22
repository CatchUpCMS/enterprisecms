<?php

namespace Modules\Dashboard\Services;

use Modules\Dashboard\Models\Widget;
use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Support\Facades\File;
//use Nwidart\Modules\Repository as Module;
use Caffeinated\Themes\Facades\Theme;
use Caffeinated\Modules\Facades\Module;
//use Teepluss\Theme\Contracts\Theme;

class DashboardService
{
    /**
     * @var Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * @var Modules
     */
    protected $modules;

    /**
     * @var Theme
     */
    protected $theme;

    public function __construct(Config $config, Module $modules, Theme $theme)
    {
        $this->config = $config;
        $this->modules = $modules;
        $this->theme = $theme;
    }
}
