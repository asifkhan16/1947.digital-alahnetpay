<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Models\Escrow;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EcsrowController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make([
            'title' => 'required|min:3|max:50',
            'amount' => 'required|numeric',
            'receiver_wallet_address' => 'required',
            'type' => 'required|numeric|min:1|max:2',
            'user_wallet_id' => 'required'
        ]);

        $recipient_wallet = Wallet::where('address', $request->receiver_wallet_address)->first();
        if (!$recipient_wallet)
            return redirect()->back()->with('error', 'Recipient Wallet not found!');

        if ($recipient_wallet->user_id == Auth::id())
            return redirect()->back()->with('error', 'You are not able to make an escrow request to yourself!');


        try {

            if ($request->type == 1) {
                Escrow::create([
                    'title' => $request->title,
                    'creator_id' => Auth::id(),
                    'receiver_id' => $recipient_wallet->user_id,
                    'seller_id' => Auth::id(),
                    'buyer_id' => $recipient_wallet->user_id,
                    'amount' => $request->amount,
                    'seller_wallet_id' => $request->user_wallet_id,
                    'buyer_wallet_id' => $recipient_wallet->id,
                    'description' => $request->description,
                    'status' => 0,
                    'type' => $request->type
                ]);
            } elseif ($request->type == 2) {
                Escrow::create([
                    'title' => $request->title,
                    'creator_id' => Auth::id(),
                    'receiver_id' => $recipient_wallet->user_id,
                    'seller_id' => $recipient_wallet->user_id,
                    'buyer_id' => Auth::id(),
                    'amount' => $request->amount,
                    'seller_wallet_id' => $recipient_wallet->id,
                    'buyer_wallet_id' => $request->user_wallet_id,
                    'description' => $request->description,
                    'status' => 0,
                    'type' => $request->type
                ]);
            }

            return redirect()->route('user.escrow')->with('success', 'Your escrow request has been successfully submitted!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }   
}
