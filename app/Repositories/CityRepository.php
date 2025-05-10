<?php

namespace App\Repositories;

use App\Models\City;

class CityRepository implements CityRepositoryInterface
{
    public function findRandomCity(): City
    {
        return City::query()->inRandomOrder()->select('id', 'country_id')->first();
    }
}
