<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Service\UserService;
use Illuminate\Http\JsonResponse;

class UsersController extends Controller
{
    public function __construct(private readonly UserService $service)
    {
    }

    public function register(CreateUserRequest $request): JsonResponse
    {
        $user = $this->service->register(
            $request->get('email'),
            $request->get('password'),
            $request->get('name'),
        );

        return response()->json($user);
    }
}
