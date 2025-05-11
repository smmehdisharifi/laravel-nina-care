<?php

namespace App\Repositories;

use App\Models\City;
use Illuminate\Pagination\LengthAwarePaginator;

interface CityRepositoryInterface
{
    public function findRandomCity(): City;
    public function findAllByCountry(int $countryId, string $search = null, int $perPage = 10): LengthAwarePaginator;
}
