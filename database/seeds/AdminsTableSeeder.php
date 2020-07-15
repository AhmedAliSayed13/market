<?php

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::create([
            'name'      =>  $faker->name,
            'image'      =>  'admin.png',
            'email'     =>  'admin@gmail.com',
            'address'     =>  $faker->address,
            'phone'     =>  '01112912233',
            'nid'     =>  $faker->ein,
            'age'     =>  53,
            'about'     =>  $faker->text,
            'password'  =>  Hash::make('123456789'),
        ]);
    }
}
