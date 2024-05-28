<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Mail\UserRegistered;
use App\Models\User;
use App\Service\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
