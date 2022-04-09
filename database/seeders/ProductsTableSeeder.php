<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product_data = [
            ["name" => "Electric Vehicles", 'created_at' => now()],
            ["name" => "Automobile", 'created_at' => now()],
            ["name" => "Luxury Cars", 'created_at' => now()],

        ];
        DB::table("products")->insert($product_data);


        $car_product_data = [
            ["car_id" => 1, 'product_id' => 2],
            ["car_id" => 1, 'created_at' => 3],
        ];
        DB::table("car_product")->insert($car_product_data);
    }
}
