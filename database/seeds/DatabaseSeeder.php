<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
        //$this->call(AdminsTableSeeder::class);
        //$this->call(BrandsTableSeeder::class);
        //$this->call(SettingsTableSeeder::class);
        //$this->call(CategorysTableSeeder::class);
        //$this->call(TagsTableSeeder::class);
       // $this->call(ProudctsTableSeeder::class);
       // $this->call(ProductimagesTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(product_attributesTableSeeder::class);
        //$this->call(CommentsTableSeeder::class);
        //$this->call(VouchersTableSeeder::class);
        //$this->call(OrdersTableSeeder::class);
        //$this->call(Producr_ordersTableSeeder::class);
    }
}
