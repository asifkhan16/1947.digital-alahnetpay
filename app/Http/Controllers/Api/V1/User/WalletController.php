<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Models\Wallet;
use App\Models\Currency;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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

    public function store(Request $request)
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

    public function local_transfer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|min:1|numeric',
            'wallet_address' => 'required',
            'recipient_wallet_address' => 'required'
        ]);

        if ($validator->fails())
            return ErrorResponse($validator->errors()->first());

        $wallet = Wallet::where('address', $request->wallet_address)->first();
        if (!$wallet)
            return ErrorResponse('Wallet not found.');

        $recipient_wallet = Wallet::where('address', $request->recipient_wallet_address)->first();
        if (!$recipient_wallet)
            return ErrorResponse('Recipient Wallet not found.');


        $charges = 3;
        if (($request->amount + $charges) > $wallet->balance)
            return ErrorResponse('Your wallet balance is insufficient to complete this transaction.');

        if ($recipient_wallet->user_id == Auth::id())
            return ErrorResponse('You are unable to make transactions to your own wallet');

        try {
            $charges = 3;
            DB::beginTransaction();
            Wallet::where('address', $request->recipient)->increment('balance', $request->amount);
            Wallet::where('id', $wallet->id)->decrement('balance', ($request->amount + $charges));
            // Transaction for sender
            Transaction::create([
                'user_id' => Auth::id(),
                'wallet_id' => $wallet->id,
                'description' => $request->description,
                'debit' => $request->amount,
                'status' => 1,
                'charges' => $charges
            ]);
            // Transaction for Reciever
            Transaction::create([
                'user_id' => $recipient_wallet->user_id,
                'wallet_id' => $recipient_wallet->id,
                'description' => 'Amount recieved',
                'credit' => $request->amount,
                'status' => 1,
                'charges' => 0,
            ]);
            DB::commit();
            return SuccessResponse('Your money transfer is complete.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return ErrorResponse($th->getMessage());
        }

    }

    public function getCurrencies(){
        $data['currencies'] = Currency::all();
        return SuccessResponse($data);
    }
}
