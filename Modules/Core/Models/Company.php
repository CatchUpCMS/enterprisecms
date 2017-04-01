<?php

namespace Modules\Core\Models;

class Company extends BaseModel
{
    protected $table = 'companies';
    protected $fillable = [
        'company_name',
    ];
}
