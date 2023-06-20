<?php

namespace App\Http\Controllers\Api\V1\User;

use Validator;
use Illuminate\Http\Request;
use App\Models\DepositMethod;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function index(){
        $data['deposit_method'] = DepositMethod::all();
        return SuccessResponse($data);
    }

    public function choosePaymentMethod(Request $request){
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'deposit_method_id' => 'required',
            'wallet_id' => 'required'
        ]);

        if($validator->fails())
            return ErrorResponse($validator->errors()->first());

        try {
            $depsit_method = DepositMethod::find($request->deposit_method_id);

            if(!$depsit_method)
                return ErrorResponse('deposit method not found.');

            if($depsit_method->status != 1)
                return ErrorResponse("You can't choose this deposit method right now.");

            
            

            

            
        } catch (\Throwable $th) {
            Log::error('Cheoose Peyment method error. ', $th->getMessage());
            return ErrorResponse('Operation failed.');
        }
    }
}
