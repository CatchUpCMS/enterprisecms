<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Cms\Modules\Core\Http\Controllers\BaseBackendController;
use Cms\Modules\Auth\Datatables\RoleManager;
use Modules\Dashboard\Traits\DataTableTrait;

class RoleManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function roleManager()
    {
        return $this->renderDataTable(with(new RoleManager())->boot());
    }
}
