<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index($status){
        if($status == -1){

            $deposits = Transaction::where('credit', '>', 0)->get();
        }else{
            $deposits = Transaction::where('credit', '>', 0)->where('status',$status)->get();
        }

        return view

    }
}
