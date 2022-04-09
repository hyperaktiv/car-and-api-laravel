<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $carsData = [
            [
                "name" => "Audi",
                "founded" => "1907",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus fugit deleniti exercitationem tempore necessitatibus, at corrupti non accusantium obcaecati ut sapiente maiores natus temporibus, perspiciatis possimus magni tempora iure voluptas.",
                "image_path" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQAy2hMS-t1AERuNg-7go-lwYISKLGbDyyzA&usqp=CAU",
                "user_id" => 1,
                'created_at' => now()
            ],
            [
                "name" => "Mercedes",
                "founded" => "1917",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus fugit deleniti exercitationem tempore necessitatibus, at corrupti non accusantium obcaecati ut sapiente maiores natus temporibus.",
                "image_path" => "https://img1.oto.com.vn/2021/06/22/bBWjEKcS/mercedes-sul-2022-01-b6cf.jpg",
                "user_id" => 1,
                'created_at' => now()
            ],
            [
                "name" => "Wolveswagen",
                "founded" => "1927",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus fugit deleniti exercitationem tempore necessitatibus, at corrupti non accusantium obcaecati ut sapiente maiores natus temporibus.",
                "image_path" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgu0IrRKIN_STpwkAaBvDF5lf9Be_YUMAG7Q&usqp=CAU",
                "user_id" => 1,
                'created_at' => now()
            ],
            [
                "name" => "ExpressCar",
                "founded" => "1990",
                "description" => "Delectus fugit deleniti exercitationem tempore necessitatibus, at corrupti non accusantium obcaecati ut sapiente maiores natus temporibus.",
                "image_path" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgu0IrRKIN_STpwkAaBvDF5lf9Be_YUMAG7Q&usqp=CAU",
                "user_id" => 1,
                'created_at' => now()
            ]
        ];
        DB::table("cars")->insert($carsData);
    }
}
