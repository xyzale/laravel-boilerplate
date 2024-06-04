<?php

namespace App\Repository;

use App\Models\User;

class UserRepository
{
    public function create(string $email, string $password, string $name): User
    {
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
    }
}
