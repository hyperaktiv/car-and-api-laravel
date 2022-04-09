<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductionDatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $car_production_date_data = [
            ["model_id" => 1, 'created_at' => '2007/06/27'],
            ["model_id" => 2, 'created_at' => '2015/08/02'],
            ["model_id" => 3, 'created_at' => '2012/03/01'],

        ];
        DB::table("car_production_dates")->insert($car_production_date_data);
    }
}
