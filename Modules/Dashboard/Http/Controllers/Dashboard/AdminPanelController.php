<?php
namespace Modules\Dashboard\Http\Controllers\Dashboard;

use Modules\Dashboard\Http\Controllers\BaseAdminController;
use Caffeinated\Themes\Facades\Theme;
use Modules\Dashboard\Services\DashboardService;
use Collective\Html\HtmlBuilder;

//extends BaseAdminController

class AdminPanelController
{
    //DashboardService $dashboard
    public function getIndex()
    {
        return Theme::View('modules.dashboard.adminpanel');
    }

    public function redirect()
    {
        return redirect(route('pxcms.admin.index'));
    }
}
