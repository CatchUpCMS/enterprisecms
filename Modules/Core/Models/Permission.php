<?php
namespace Modules\Core\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
  protected $table = 'permissions';
  protected $fillable = ['name', 'display_name', 'description'];
}