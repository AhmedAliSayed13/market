<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{


    public function run()
    {
        $count = 1;
        factory(\App\Models\Setting::class, $count)->create();
    }

}
