<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Models\Wallet;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WalletController extends Controller
{

    public function show()
    {
        $user_wallets = Wallet::where('user_id', Auth::id())->get();
        return SuccessResponse($user_wallets);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:50',
            'currency_id' => 'required|numeric'
        ]);
        if ($validator->fails())
            return ErrorResponse($validator->errors()->first());

        $currency = Currency::find($request->currency_id);
        if (!$currency)
            return ErrorResponse('Currency code not found');

        $timestamp = Carbon::now()->timestamp;
        $timestamp = substr($timestamp, 0, -2);

        $wallet_address = $currency->code . random_int(10, 99) . 'NETP' . $timestamp . 'U' . Auth::id();

        Wallet::create([
            'user_id' => Auth::id(),
            'currency_id' => $request->currency_id,
            'name' => $request->name,
            'address' => $wallet_address,
            'balance' => 0
        ]);

        return SuccessResponse('Your wallet has been created successfully.');
    }
}
