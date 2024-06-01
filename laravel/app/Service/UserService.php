<?php

namespace App\Service;

use App\Events\UserCreated;
use App\Models\User;
use App\Repository\UserRepository;

class UserService
{
    public function __construct(private UserRepository $repository)
    {
    }

    public function register(string $email, string $password, string $name): User
    {
        $user = $this->repository->create($email, $password, $name);

        UserCreated::dispatch($user);

        return $user;
    }
}
