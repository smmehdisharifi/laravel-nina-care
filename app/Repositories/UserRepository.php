<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserRepository implements UserRepositoryInterface
{
    public function search(string $search = null, int $perPage = 10): LengthAwarePaginator
    {
        return User::query()
            ->with(['address', 'address.country', 'address.city'])
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('first_name', 'like', "%{$search}%")
                        ->orWhere('last_name', 'like', "%{$search}%")
                        ->orWhereHas('address', function ($addressQuery) use ($search) {
                            $addressQuery->where('post_code', 'like', "%{$search}%")
                                ->orWhereHas('country', fn ($q) => $q->where('name', 'like', "%{$search}%"))
                                ->orWhereHas('city', fn ($q) => $q->where('name', 'like', "%{$search}%"));
                        });
                });
            })
            ->paginate($perPage)
            ->withQueryString();
    }

    public function findByIdOrFail(int $id): User
    {
        return User::query()
            ->with(['address', 'address.country', 'address.city'])
            ->findOrFail($id);
    }

    public function create($data): User
    {
        $user = new User();
        $user->fill([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt('password'),
        ]);
        $user->save();

        return $user;
    }

    public function update(int $id, $data): void
    {
        User::query()
            ->where('id', $id)
            ->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
            ]);
    }

}
