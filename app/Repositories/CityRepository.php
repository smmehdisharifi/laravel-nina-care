<?php

namespace App\Repositories;

use App\Models\City;
use Illuminate\Pagination\LengthAwarePaginator;

class CityRepository implements CityRepositoryInterface
{
    public function findRandomCity(): City
    {
        return City::query()->inRandomOrder()->select('id', 'country_id')->first();
    }

    public function findAllByCountry(int $countryId, string $search = null, int $perPage = 10): LengthAwarePaginator
    {
        return City::query()
            ->where('country_id', $countryId)
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate($perPage)
            ->withQueryString();
    }
}
