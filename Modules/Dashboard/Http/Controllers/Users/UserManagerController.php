<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Cms\Modules\Core\Http\Controllers\BaseBackendController;
use Cms\Modules\Auth\Datatables\UserManager;
use Modules\Dashboard\Traits\DataTableTrait;

class UserManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function userManager()
    {
        return $this->renderDataTable(with(new UserManager())->boot());
    }
}
