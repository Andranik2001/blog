<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            ['brand' => 'Mercedes-Benz', 'model' => 'CLS', 'year' => 2022, 'mileage' => 10000, 'color' => 'Black', 'price' => 200000],
            ['brand' => 'BMW', 'model' => 'E46', 'year' => 2002, 'mileage' => 100000, 'color' => 'Kendy', 'price' => 5000],
        ]);
    }
}
