<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index($status){
        if($status == -1){

            $deposits = Transaction::where('credit', '>', 0)->with('wallet.currency','transaction_detail')->get();
        }else{
            $deposits = Transaction::where('credit', '>', 0)->with('wallet.currency','transaction_detail')->where('status',$status)->get();
        }

        // dd($deposits->toArray());
        return view('admin.deposits.index')->with('deposits',$deposits);

    }

    public function ApproveOrRejectTransaction($transaction_id, $status){
        // dd($transaction_id);
        Transaction::where('id',$transaction_id)->update([
            'status' => $status
        ]);

        return back()->with('success','Action perform successfully.');
    }
}
