<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::insert([
            'id' => 1,
            'name' => "DangNam",
            'email' => "1stgoddeath@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'created_at' => now()
        ]);

        $this->call([
            CarsTableSeeder::class,
            CarModelsTableSeeder::class,
            CarEnginesTableSeeder::class,
            ProductionDatesTableSeeder::class,
            ProductsTableSeeder::class
        ]);
    }
}
