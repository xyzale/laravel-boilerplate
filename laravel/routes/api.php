<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:api', 'scopes:list-users'])->get('/users', function (Request $request) {
    return User::all();
});

Route::middleware(['auth:api', 'scopes:create-posts'])->post('/posts', function (Request $request) {
    return response()->json([
        'message' => 'Post created'
    ]);
});



