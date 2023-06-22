<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'wallet_id' => 'required|integer|min:1'
        ]);

        if($validator->fails())
            return ErrorResponse($validator->errors()->first());

        $wallet = Wallet::where(['user_id' => Auth::id(), 'wallet_id' => $request->wallet_id])->first();

        if(!$wallet)
            return ErrorResponse('Wallet not found.');
    }
}
