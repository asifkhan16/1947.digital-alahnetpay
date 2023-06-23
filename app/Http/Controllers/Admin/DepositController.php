<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function index(){
        if(request()->input('status') == -1){

            $deposits = Transaction::where('credit', '>', 0)->with('wallet.currency','transaction_detail')->get();
        }else{
            $deposits = Transaction::where('credit', '>', 0)->with('wallet.currency','transaction_detail')->where('status',request()->input('status'))->get();
        }

        // dd($deposits->toArray());
        return view('admin.deposits.index')->with('deposits',$deposits);

    }

    public function ApproveOrRejectTransaction(Transaction $transaction){   
        try {
            $wallet = Wallet::find($transaction->wallet_id);
            // dd($wallet);
            DB::beginTransaction();

                $transaction->update([
                    'status' => request()->input('status')
                ]);

                if(request()->input('status') == 1){
                    $wallet->update([
                        'balance' => $transaction->credit + $wallet->balance,
                    ]);
                }
            DB::commit();
            return back()->with('success','Action perform successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Approve or Reject Transaction Error : '.$th->getMessage());
            return back()->with('error',$th->getMessage());
        }
        

        
    }
}
