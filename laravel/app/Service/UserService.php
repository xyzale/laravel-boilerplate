<?php

namespace App\Service;

use App\Mail\UserRegistered;
use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Mail;

class UserService
{
    public function __construct(private UserRepository $repository)
    {
    }

    public function register(string $email, string $password, string $name): User
    {
        $user = $this->repository->create($email, $password, $name);

        Mail::to($user)->send(new UserRegistered($user));

        return $user;
    }
}
