<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    /**
     * @throws ValidationException
     */
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
        } catch (QueryException $e) {
            if ($e->getCode() === "23000") {
                throw ValidationException::withMessages(['email' => 'Email in use']);
            }
            return response()->json(['error' => $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['user' => $u, 'token' => $token->plainTextToken]);
    }
}
