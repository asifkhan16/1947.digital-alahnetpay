<?php

namespace App\Http\Controllers\User;

use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        dd($request->all());
    }
}
