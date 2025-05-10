<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ini_set('memory_limit', '512M');

        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(UserSeeder::class);
    }
}
