<?php

namespace App\Repositories;

use App\Models\Country;
use Illuminate\Pagination\LengthAwarePaginator;

class CountryRepository implements CountryRepositoryInterface
{
    public function search(string $search = null, int $perPage = 10): LengthAwarePaginator
    {
        return Country::query()
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate($perPage)
            ->withQueryString();
    }
}
