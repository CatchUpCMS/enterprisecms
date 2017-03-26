<?php

use Illuminate\Database\Seeder;

class UsersDummyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Modules\Core\Models\User::class, 99)->create()->each(function ($c) {
        });
    }
}
