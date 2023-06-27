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
        $validator = Validator::make($request->all(),[
            'title' => 'required|min:3|max:50',
            'amount' => 'required|numeric',
            'receiver_wallet_address' => 'required',
            'type' => 'required|numeric|min:1|max:2',
            'user_wallet_id' => 'required'
        ]);

        if ($validator->fails())
            return ErrorResponse($validator->errors()->first());

        $recipient_wallet = Wallet::where('address', $request->receiver_wallet_address)->first();
        if (!$recipient_wallet)
            return ErrorResponse('Recipient Wallet not found!');
            
        if ($recipient_wallet->user_id == Auth::id())
            return ErrorResponse("You are not able to make an escrow request to yourself!");


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

            return SuccessResponse('Your escrow request has been successfully submitted!');
        } catch (\Throwable $th) {
            Log::error('Escrow Creation Error : '.$th->getMessage());
            return ErrorResponse('Opertation failed contact our support.');
        }
    }   
}
