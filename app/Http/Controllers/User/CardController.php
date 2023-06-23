<?php

namespace App\Http\Controllers\User;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::with('user')->where('user_id', Auth::id())->where('status',1)->get();
        // dd($cards->toArray());
        return view('user.card.index')->with('cards', $cards);
    }

    public function create()
    {
        $wallets = Wallet::where('user_id', Auth::id())->get();
        return view('user.card.create')->with('wallets', $wallets);
    }

    public function store(Request $request)
    {
        $request->validate([
            'wallet_id' => 'required|numeric'
        ]);

        $existing_card = Card::where('user_id', Auth::id())->where('wallet_id', $request->wallet_id)->first();
        if ($existing_card)
            return back()->with('error', 'The card is already exist for this Wallet !');

        $card_number = $this->generateCardNumber();
        $cvc = random_int(100, 999);


        try {
            Card::create([
                'user_id' => Auth::id(),
                'wallet_id' => $request->wallet_id,
                'card_number' => $card_number,
                'cvc' => $cvc,
                'is_activated' => 0,
                'is_freeze' => 0,
                'status' => 0,
            ]);

            return back()->with('success', 'Your request for Card has been submitted.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
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
