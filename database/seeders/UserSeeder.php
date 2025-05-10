<?php

namespace Database\Seeders;

use App\Jobs\CreateUsersJob;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chunks = 1000;
        $total = 1000000;

        for ($i = 0; $i < $total / $chunks; $i++) {
            CreateUsersJob::dispatch($chunks);
        }
    }
}
