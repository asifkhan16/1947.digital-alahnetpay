<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HoldTransaction;
use Illuminate\Http\Request;

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
}
