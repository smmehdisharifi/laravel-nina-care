<?php

namespace App\Repositories;

use App\Models\City;

interface CityRepositoryInterface
{
    public function findRandomCity(): City;
}
