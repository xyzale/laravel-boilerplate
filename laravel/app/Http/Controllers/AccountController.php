<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function createAccount(Request $request): JsonResponse
    {
        $account = Account::createWithAttributes(['name' => $request->get('name')]);

        return response()->json([
            'account' => $account
        ]);
    }

    public function deposit(Request $request): JsonResponse
    {
        $account = Account::find($request->get('account_id'));
        $account->addMoney($request->get('amount'));
        $account->refresh();

        return response()->json([
            'account' => $account
        ]);
    }

    public function withdraw(Request $request): JsonResponse
    {
        $account = Account::find($request->get('account_id'));
        $account->subtractMoney($request->get('amount'));
        $account->refresh();

        return response()->json([
            'account' => $account
        ]);
    }
}
