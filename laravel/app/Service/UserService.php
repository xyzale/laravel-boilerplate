<?php

namespace App\Service;

use App\Events\UserCreated;
use App\Models\User;
use App\Repository\UserRepository;
use App\Service\Exceptions\DuplicateEmailException;

class UserService
{
    public function __construct(private UserRepository $repository)
    {
    }

    public function register(string $email, string $password, string $name): User
    {
        try {
            $user = $this->repository->create($email, $password, $name);
        } catch (\Exception $e) {
            throw new DuplicateEmailException();
        }

        UserCreated::dispatch($user);

        return $user;
    }
}
