<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\HoldTransaction;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HoldController extends Controller
{
    public function index(){
        if(request()->input('status') == -1){
            $holdTransactions = HoldTransaction::all();
        }else{
            $holdTransactions = HoldTransaction::where('status',request()->input('status'));
        }

        return view('admin.hold-transaction.index')->with('hold_transactions',$holdTransactions);
    }


    public function approveHoldTransaction(HoldTransaction $holdTransaction){
        try {
            DB::beginTransaction();
                $transaction = Transaction::find($holdTransaction->transaction_id);

                Wallet::where('id',$transaction->wallet_id)->increment('balance', $transaction->credit);

                $transaction->update([
                    'status' => 4
                ]);

                $holdTransaction->update([
                    'status' => 2,
                ]);

            DB::commit();

            return back()->with('success','Transaction release Successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error',$th->getMessage());
            //throw $th;
        }
    }

    public function rejectHoldTransaction($holdTransaction){
        dd($holdTransaction);
    }
}
