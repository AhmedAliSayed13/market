<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProudctsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        factory(Product::class, $count)->create();
    }
}
