<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 6;
        factory(\App\Models\Attribute::class, $count)->create();
    }
}
