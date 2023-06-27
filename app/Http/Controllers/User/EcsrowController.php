<?php

namespace App\Http\Controllers\User;

use App\Models\Escrow;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\EscrowTransaction;
use Illuminate\Support\Facades\Auth;

class EcsrowController extends Controller
{

    public function index()
    {
        $escrows = Escrow::with('seller', 'buyer')->where('receiver_id', Auth::id())->orWhere('creator_id', Auth::id())->get();
        // dd($escrows->toArray());
        return view('user.escrow.index')->with('escrows', $escrows);
    }

    public function transactionIndex()
    {
        $transactions = Transaction::with('escrow_transaction')->wherehas('escrow_transaction')->where('user_id', Auth::id())->get();
        // dd($transactions->toArray());
        return view('user.escrow.transaction')->with('transactions', $transactions);
    }

    public function create()
    {
        $wallets = Wallet::where('user_id', Auth::id())->get();
        return view('user.escrow.create')->with('wallets', $wallets);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|min:3|max:50',
            'amount' => 'required|numeric',
            'receiver_wallet_address' => 'required',
            'request_type' => 'required|numeric|min:1|max:2',
            'user_wallet_id' => 'required'
        ]);


        $recipient_wallet = Wallet::where('address', $request->receiver_wallet_address)->first();
        $user_wallet = Wallet::where('id',$request->user_wallet_id)->first();

        if (!$recipient_wallet)
            return redirect()->back()->with('error', 'Recipient Wallet not found!');

        if ($recipient_wallet->user_id == Auth::id())
            return redirect()->back()->with('error', 'You are not able to make an escrow request to yourself!');

        if(!$user_wallet)
            return back()->with('error','Your Walllet not found please select the correct wallet.');

        if($request->request_type == 1){
            if($user_wallet->balance < $request->amount)
                return back()->with('error','You have insufficient balance.');
        }

        if($request->request_type == 2){
            if($recipient_wallet->balance < $request->amount)
                return back()->with('error','Recipient have insufficient balance.');
        }

        try {

            if ($request->request_type == 1) {
                Escrow::create([
                    'title' => $request->title,
                    'creator_id' => Auth::id(),
                    'receiver_id' => $recipient_wallet->user_id,
                    'seller_id' => $recipient_wallet->user_id,
                    'buyer_id' => Auth::id(),
                    'amount' => $request->amount,
                    'seller_wallet_id' => $recipient_wallet->id,
                    'buyer_wallet_id' => $user_wallet->id,
                    'description' => $request->description,
                    'status' => 0,
                    'type' => $request->request_type
                ]);
            } elseif ($request->request_type == 2) {
                Escrow::create([
                    'title' => $request->title,
                    'creator_id' => Auth::id(),
                    'receiver_id' => $recipient_wallet->user_id,
                    'seller_id' => Auth::id(),
                    'buyer_id' => $recipient_wallet->user_id,
                    'amount' => $request->amount,
                    'seller_wallet_id' => $user_wallet->id,
                    'buyer_wallet_id' => $recipient_wallet->id,
                    'description' => $request->description,
                    'status' => 0,
                    'type' => $request->request_type
                ]);
            }

            return redirect()->route('user.escrow')->with('success', 'Your escrow request has been successfully submitted!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function acceptEscrow(Escrow $escrow)
    {
        // dd($escrow->toArray());
        if ($escrow->receiver_id != Auth::id())
            return redirect()->back()->with('error', 'You are unable to Accept this escrow !');

        try {
            DB::beginTransaction();
            if ($escrow->type == 1) {  // seller type
                $wallet = Wallet::find($escrow->buyer_wallet_id);
                if ($wallet->balance < $escrow->amount)
                    return redirect()->back()->with('error', 'You have insufficient balance in wallet to accept this escrow');

                Wallet::where('id', $wallet->id)->decrement('balance', $escrow->amount);
                Escrow::where('id', $escrow->id)->update(['status' =>  1]);  // 1 mean's accept
                $transaction =  Transaction::create([
                    'transaction_unqiue_id' => Str::uuid(),
                    'user_id' => Auth::id(),
                    'wallet_id' => $wallet->id,
                    'description' => 'Withdraw funds via Escrow !',
                    'debit' => $escrow->amount,
                    'status' => 3, // 3 means HOLD
                    'charges' => 0,
                ]);
                EscrowTransaction::create([
                    'transaction_id' => $transaction->id,
                    'escrow_id' => $escrow->id
                ]);

                $wallet = Wallet::find($escrow->seller_wallet_id);

                $transaction =  Transaction::create([
                    'transaction_unqiue_id' => Str::uuid(),
                    'user_id' => $wallet->user_id,
                    'wallet_id' => $wallet->id,
                    'description' => 'deposit funds via Escrow !',
                    'credit' => $escrow->amount,
                    'status' => 3, // 3 means HOLD
                    'charges' => 0,
                ]);
                EscrowTransaction::create([
                    'transaction_id' => $transaction->id,
                    'escrow_id' => $escrow->id
                ]);
            }

            if ($escrow->type == 2) { // buyer type
                $wallet = Wallet::find($escrow->buyer_wallet_id);
                if ($wallet->balance < $escrow->amount)
                    return redirect()->back()->with('error', 'wallet have insufficient balance.');

                Wallet::where('id', $wallet->id)->decrement('balance', $escrow->amount);
                Escrow::where('id', $escrow->id)->update(['status' =>  1]);  // 1 mean's accept
                $transaction = Transaction::create([
                    'transaction_unqiue_id' => Str::uuid(),
                    'user_id' => $wallet->user_id,
                    'wallet_id' => $wallet->id,
                    'description' => 'Withdraw funds via Escrow !',
                    'debit' => $escrow->amount,
                    'status' => 3, // 3 means HOLD
                    'charges' => 0,
                ]);
                EscrowTransaction::create([
                    'transaction_id' => $transaction->id,
                    'escrow_id' => $escrow->id
                ]);

                $seller_wallet = Wallet::find($escrow->seller_wallet_id);
                // dd($seller_wallet->toArray());

                $transaction = Transaction::create([
                    'transaction_unqiue_id' => Str::uuid(),
                    'user_id' => Auth::id(),
                    'wallet_id' => $seller_wallet->id,
                    'description' => 'deposit funds via Escrow !',
                    'credit' => $escrow->amount,
                    'status' => 3, // 3 means HOLD
                    'charges' => 0,
                ]);
                EscrowTransaction::create([
                    'transaction_id' => $transaction->id,
                    'escrow_id' => $escrow->id
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Escrow accepted successfully !');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function rejectEscrow(Escrow $escrow)
    {
        if ($escrow->receiver_id != Auth::id())
            return redirect()->back()->with('error', 'You are unable to Reject this escrow !');

        Escrow::where('id', $escrow->id)->update(['status' =>  3]);
        return redirect()->back()->with('success', 'Escrow rejected successfully !');
    }

    public function releaseEscrow(Escrow $escrow)
    {
        if ($escrow->type == 2) {
            if ($escrow->creator_id != Auth::id())
                return redirect()->back()->with('error', 'You can not Release this transaction !');
        } elseif ($escrow->receiver_id != Auth::id())
            return redirect()->back()->with('error', 'You can not Release this transaction !');

            $transactions = Transaction::wherehas('escrow_transaction', function ($q) use ($escrow) {
                $q->where('escrow_id', $escrow->id);
            })->get();
            // dd($transactions->toArray());

        try {
            DB::beginTransaction();
            foreach ($transactions as $transaction) {
                if ($transaction->debit == 0) {
                    Wallet::where('id', $transaction->wallet_id)->increment('balance', $transaction->credit);
                }
                $transaction->update(['status' => 1]);
            }
            Escrow::where('id', $escrow->id)->update([
                'status' => 3
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Transaction completed !');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
        //  where('escrow_id',$escrow->id)->get();

    }
}
