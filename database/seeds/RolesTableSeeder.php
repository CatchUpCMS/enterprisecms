<?php

use Illuminate\Database\Seeder;
use Modules\Core\Models\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = Role::create([
          'id' => 99,
          'name' => 'admin',
          'display_name' => 'Admin',
          'description' => 'Only one and only admin',
      ]);

      $manager = Role::create([
          'id' => 90,
          'name' => 'manager',
          'display_name' => 'Manager',
          'description' => 'Manager',
      ]);


      $teamleader = Role::create([
          'id' => 80,
          'name' => 'teamleader',
          'display_name' => 'teamleader',
          'description' => 'teamleader',
      ]);


      $staff = Role::create([
          'id' => 60,
          'name' => 'staff',
          'display_name' => 'staff',
          'description' => 'staff',
      ]);



      $usermanager = Role::create([
          'id' => 10,
          'name' => 'usermanager',
          'display_name' => 'Usermanager',
          'description' => 'Users Manager',
      ]);


      $user = Role::create([
          'id' => 1,
          'name' => 'user',
          'display_name' => 'User',
          'description' => 'Users',
      ]);



    }
}
