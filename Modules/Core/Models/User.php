<?php

namespace Modules\Core\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    /**
     * Get users with certain roles with Eloquent calls
     * 
     * @param array $roles
     */
    public function scopeHasRoles($query,$roles){
       return $query->whereHas('roles',function($query) use ($roles){
             $query->whereIn('name',$roles);
      });
   }
}
