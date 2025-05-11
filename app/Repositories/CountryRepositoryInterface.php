<?php

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

interface CountryRepositoryInterface
{
    public function search(string $search = null, int $perPage = 10): LengthAwarePaginator;
}
