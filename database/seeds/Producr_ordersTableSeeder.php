<?php

use Illuminate\Database\Seeder;

class Producr_ordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        factory(\App\Models\Order_product::class, $count)->create();
    }
}
