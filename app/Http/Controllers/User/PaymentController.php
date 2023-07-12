<?php

namespace App\Http\Controllers\User;

use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class PaymentController extends Controller
{
    public function paymentRequest(Request $request){
        $validator = Validator::make($request->all(),[
            'client_id' => 'required',
            'client_secret' => 'required',
            'amount' => 'required|numeric|min:1|max:100',
            'currency' => 'required'
        ]);

        if($validator->fails()){
            return view('payment.error')->with('errors',$validator->errors()->all());
        }

        $merchant = Merchant::where(['client_id' => $request->client_id, 'client_secret' => $request->client_secret,'status' => 1])->first();
        if(!$merchant){
            return view('payment.error')->with('errors',['Merchant Account Not Found.']);
        }

        

        dd($request->all());
    }
}


