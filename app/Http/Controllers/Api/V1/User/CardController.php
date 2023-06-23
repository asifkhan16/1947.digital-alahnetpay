<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Models\Card;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'wallet_id' => 'required|integer|min:1'
        ]);

        if ($validator->fails())
            return ErrorResponse($validator->errors()->first());

        $wallet = Wallet::where(['user_id' => Auth::id(), 'id' => $request->wallet_id])->first();

        if (!$wallet)
            return ErrorResponse('Wallet not found.');

        $card = Card::where('user_id', Auth::id())->where('wallet_id', $wallet->id)->first();

        if ($card)
            return ErrorResponse('Card already exist.');

        $card_number = $this->generateCardNumber();
        $cvc = random_int(100, 999);



        try {
            Card::create([
                'user_id' => Auth::id(),
                'wallet_id' => $wallet->id,
                'card_number' => $card_number,
                'cvc' => $cvc,
                'is_activated' => 0,
                'is_freeze' => 0,
                'status' => 0,
            ]);

            return SuccessResponse('Your request for Card has been submitted.');
        } catch (\Throwable $th) {
            Log::error('Card Request Error : ' . $th->getMessage());
            return ErrorResponse('Operation failed contact our support.');
        }
    }

    public function generateCardNumber()
    {

        $card_number = "98" . random_int(10000000000000, 99999999999999);

        $is_card_number_exits = Card::where('card_number', $card_number)->first();

        if ($is_card_number_exits)
            return $this->generateCardNumber();

        return $card_number;
    }
}
