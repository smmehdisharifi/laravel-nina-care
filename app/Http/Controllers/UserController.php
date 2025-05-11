<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;
use App\Requests\UserStoreRequest;
use App\Requests\UserUpdateRequest;
use App\Services\UserManager;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
        private readonly UserManager $userManager
    ) {}

    public function index(Request $request): Response
    {
        $users = $this->userRepository->search($request->search);
        return Inertia::render('Dashboard', ['users' => $users]);
    }

    public function show(int $userId): Response
    {
        $user = $this->userRepository->findByIdOrFail($userId);
        return Inertia::render('Show', ['user' => $user]);
    }

    public function create(): Response
    {
        return Inertia::render('Create');
    }

    public function store(UserStoreRequest $request): Response
    {
        $user = $this->userManager->create($request->validated());

        return Inertia::render('Show', ['user' => $user]);
    }

    public function edit(int $userId): Response
    {
        $user = $this->userRepository->findByIdOrFail($userId);
        return Inertia::render('Edit', ['user' => $user]);
    }

    public function update(UserUpdateRequest $request, int $userId): Response
    {
        $user = $this->userRepository->findByIdOrFail($userId);

        $this->userManager->update($user, $request->validated());

        return Inertia::render('Show', ['user' => $user]);
    }
}

