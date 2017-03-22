<?php

use Illuminate\Database\Seeder;

class StaffDummyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Modules\Core\Models\Staff::class, 99)->create()->each(function ($c) {
        });
    }
}
