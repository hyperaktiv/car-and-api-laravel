<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarEnginesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $car_engine_data = [
            ["model_id" => 1, "engine_name" => "1.2 TFSI", 'created_at' => now()],
            ["model_id" => 1, "engine_name" => "1.8 TFSI", 'created_at' => now()],
            ["model_id" => 2, "engine_name" => "1.5 TFSI", 'created_at' => now()],
            ["model_id" => 3, "engine_name" => "2.2 TFSI", 'created_at' => now()],
        ];
        DB::table("car_engines")->insert($car_engine_data);
    }
}
