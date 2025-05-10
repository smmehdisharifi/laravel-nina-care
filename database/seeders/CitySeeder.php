<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(FirstCitySeeder::class);
        $this->call(SecondCitySeeder::class);
        $this->call(ThirdCitySeeder::class);
        $this->call(FourthCitySeeder::class);
        $this->call(FifthCitySeeder::class);
        $this->call(SixthCitySeeder::class);
        $this->call(SeventhCitySeeder::class);
    }
}
