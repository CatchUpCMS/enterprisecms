<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Modules\Core\Http\Controllers\BaseBackendController;
use Modules\Core\Datatables\CompanyManager;
use Modules\Core\Traits\DataTableTrait;

class CompanyManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function companyManager()
    {
        return $this->renderDataTable(with(new CompanyManager())->boot());
    }
}
