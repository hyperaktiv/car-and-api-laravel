<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $car_model_data = [
            ["car_id" => 1, "model_name" => "A1", 'created_at' => now()],
            ["car_id" => 1, "model_name" => "A3", 'created_at' => now()],
            ["car_id" => 1, "model_name" => "A5", 'created_at' => now()],
            ["car_id" => 2, "model_name" => "A1", 'created_at' => now()],
            ["car_id" => 2, "model_name" => "Y3", 'created_at' => now()],
            ["car_id" => 2, "model_name" => "M5", 'created_at' => now()],
            ["car_id" => 3, "model_name" => "T1", 'created_at' => now()],
            ["car_id" => 3, "model_name" => "X3", 'created_at' => now()],
            ["car_id" => 3, "model_name" => "V5", 'created_at' => now()]
        ];
        DB::table("car_models")->insert($car_model_data);
    }
}
