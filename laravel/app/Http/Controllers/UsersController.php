<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        try {
            $u = new User();
            $u->name = $request->get('name');
            $u->email = $request->get('email');
            $u->password = bcrypt($request->get('password'));
            $u->save();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json($u);
    }
}
