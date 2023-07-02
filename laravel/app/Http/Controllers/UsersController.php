<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        try {
            $u = new User();
            $u->name = $request->get('name');
            $u->email = $request->get('email');
            $u->password = bcrypt($request->get('password'));
            $u->save();
            $token = $u->createToken($request->get('device_name'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['user' => $u, 'token' => $token->plainTextToken]);
    }
}
