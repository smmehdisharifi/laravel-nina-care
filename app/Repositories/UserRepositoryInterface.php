<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Models\User;

interface UserRepositoryInterface
{
    public function search(string $search = null, int $perPage = 10): LengthAwarePaginator;
    public function findByIdOrFail(int $id): User;
    public function create($data): User;
    public function update(int $id, $data);
}
