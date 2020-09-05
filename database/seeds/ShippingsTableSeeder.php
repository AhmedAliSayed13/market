<?php

use Illuminate\Database\Seeder;

class ShippingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        factory(\App\Models\Shipping::class, $count)->create();
    }
}
