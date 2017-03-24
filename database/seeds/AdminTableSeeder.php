<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_name' => 'Admin',
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin123')
            ),
        ));
    }
}
