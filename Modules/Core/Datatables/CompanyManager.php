<?php

namespace Modules\Core\Datatables;

use Lock;
use Theme;
use Modules\Core\Models\Company;

class CompanyManager
{
    public function boot()
    {
        return [
            /*
             * Page Decoration Values
             */
            'page' => [
                'title' => 'Company Manager',
                'alert' => [
                    'class' => 'info',
                    'text' => '<i class="fa fa-info-circle"></i> You can manage your companies from here.',
                ],
                'header' => [
                    [
                        'btn-text' => 'Create Company',
                        'btn-route' => 'admin.company.add',
                        'btn-class' => 'btn btn-info btn-labeled',
                        'btn-icon' => 'fa fa-plus',
                    ],
                ],
            ],

            /*
             * Set up some table options, these will be passed back to the view
             */
            'options' => [
                'pagination' => false,
                'searching' => true,
                'column_search' => true,
                'ordering' => true,
                'sort_column' => 'id',
                'sort_order' => 'desc',
                'source' => 'modules.core.companies',
                'collection' => function () {
                    $model =  'Modules\Core\Models\Company';
                    //::with('roles')
                    return Company::get();
                },
            ],

            /*
             * Lists the tables columns
             */
            'columns' => [
                'id' => [
                    'th' => '&nbsp;',
                    'tr' => function ($model) {
                        return $model->id;
                    },
                    'orderable' => true,
                    'width' => '5%',
                ],
                'companyname' => [
                    'th' => 'Company Name',
                    'tr' => function ($model) {
                        return $model->name;
                    },
                    'orderable' => true,
                    'searchable' => true,
                    'width' => '10%',
                ],

                'actions' => [
                    'th' => 'Actions',
                    'tr' => function ($model) {
                        $return = [];

                        //if (Lock::can('manage.read', 'auth_company')) {
                            $return[] = [
                                'btn-title' => 'View Company',
                                'btn-link' => route('admin.company.view', $model->id),
                                'btn-class' => 'btn btn-default btn-xs btn-labeled',
                                'btn-icon' => 'fa fa-file-text-o',
                            ];
                        //}

                        //if (Lock::can('manage.update', 'auth_company')) {
                            $return[] = [
                                'btn-title' => 'Edit',
                                'btn-link' => route('admin.company.edit', $model->id),
                                'btn-class' => 'btn btn-warning btn-xs btn-labeled',
                                'btn-icon' => 'fa fa-pencil',
                            ];
                        //}

                        return $return;
                    },
                ],
            ],
        ];
    }
}
