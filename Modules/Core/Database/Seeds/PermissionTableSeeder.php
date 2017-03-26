<?php

use Illuminate\Database\Seeder;
use Modules\Core\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $manage_users = Permission::create([
            'name' => 'manage-admin',
            'display_name' => 'Manage Users,Roles and Permissions',
            'description' => 'Can manage users,roles and permission"s',
        ]);


        $permission = [

            [
                'name' => 'relations-list',
                'display_name' => 'Display relations Listing',
                'description' => 'See only Listing Of relations'
            ],
            [
                'name' => 'relations-create',
                'display_name' => 'Create relations',
                'description' => 'Create New relations'
            ],
            [
                'name' => 'relations-edit',
                'display_name' => 'Edit relations',
                'description' => 'Edit relations'
            ],
            [
                'name' => 'relations-delete',
                'display_name' => 'Delete relations',
                'description' => 'Delete relations'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}