<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Models\DepositMethod;
use Illuminate\Http\Request;
use Validator;

class DepositController extends Controller
{
    public function index(){
        $data['deposit_method'] = DepositMethod::all();
        return SuccessResponse($data);
    }

    public function choosePaymentMethod(Request $request){
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'payment_method_id' => 'required'
        ]);

        if($validator->fails())
            return ErrorResponse($validator->errors()->first());

        try {
            
        } catch (\Throwable $th) {
            
        }
    }
}
