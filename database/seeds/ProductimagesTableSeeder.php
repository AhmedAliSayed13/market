<?php

use Illuminate\Database\Seeder;

class ProductimagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        factory(\App\Models\Proudctimage::class, $count)->create();
    }
}
