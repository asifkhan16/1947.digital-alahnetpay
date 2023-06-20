<?php

namespace App\Http\Controllers\User;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        $wallets = Wallet::where('user_id', Auth::id())->get();
        return view('user.wallets.index')->with('wallets', $wallets);
    }

    public function send(Wallet $wallet)
    {
        return view('user.wallets.local-transfer')->with('wallet', $wallet);
    }

    public function createLocal_tranfer(Wallet $wallet)
    {
        return view('user.wallets.create-local-transfer')->with('wallet', $wallet);
    }

    public function send_Local_tranfer(Request $request, Wallet $wallet)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'recipient' => 'required',
        ]);
        $charges = 3;
        if (($request->amount + $charges) > $wallet->balance)
            return redirect()->back()->with('error', 'Your wallet balance is insufficient to complete this transaction.');

        $recipient_wallet = Wallet::where('address', $request->recipient)->first();
        if (!$recipient_wallet)
            return redirect()->back()->with('error', 'Recipient wallet not found');

        if ($recipient_wallet->user_id == Auth::id())
            return redirect()->back()->with('error', 'You are unable to make transactions to your own wallet');

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
            return redirect()->back()->with('success', 'Your money transfer is complete')->with('wallet',);
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        dd($request->all());
    }
}
