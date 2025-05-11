<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;

readonly class UserManager
{
    public function __construct(private UserRepositoryInterface $userRepository) {}

    public function create($data): User
    {
        $user = $this->userRepository->create($data);
        $user->address()->create([
            'post_code' => $data['post_code'],
            'street' => $data['street'],
            'country_id' => $data['country_id'],
            'city_id' => $data['city_id'],
        ]);
        $user->load(['address', 'address.country', 'address.city']);

        return $user;
    }

    public function update(User $user, $data): User
    {
        $this->userRepository->update($user->id, $data);
        $user->fill([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
        ]);
        $user->address()->update([
            'post_code' => $data['post_code'],
            'street' => $data['street'],
            'country_id' => $data['country_id'],
            'city_id' => $data['city_id'],
        ]);
        $user->load(['address', 'address.country', 'address.city']);

        return $user;
    }
}
