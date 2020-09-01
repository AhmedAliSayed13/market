<?php

use App\Models\Product_attribute;
use Illuminate\Database\Seeder;

class product_attributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        factory(Product_attribute::class, $count)->create();
    }
}
