<?php

namespace App\Http\Controllers\Api\V1\User;

use Validator;
use RuntimeException;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Models\DepositMethod;
use App\Models\ChooseDepositMethod;
use Illuminate\Support\Facades\Log;
use Psy\Exception\ThrowUpException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function index(){
        $data['deposit_method'] = DepositMethod::all();
        return SuccessResponse($data);
    }

    public function chooseDepositMethod(Request $request){
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'deposit_method_id' => 'required',
            'wallet_id' => 'required'
        ]);

        if($validator->fails())
            return ErrorResponse($validator->errors()->first());

        try {
            $depsit_method = DepositMethod::find($request->deposit_method_id);
            $wallet = Wallet::find($request->wallet_id);

            if(!$depsit_method)
                return ErrorResponse('deposit method not found.');

            if($depsit_method->status != 1)
                return ErrorResponse("You can't choose this deposit method right now.");

            if(!$wallet)
                return ErrorResponse('Wallet not found.');

            if($wallet->status != 1)
                return ErrorResponse("Your Wallet has been blocked please contact our support.");

            
            $response = PercentToObtaind($depsit_method->percentage_deposit_fee, $request->amount);

            if(!$response['success']){
                throw new RuntimeException('Operation Faild.');
            }

            $percent_fee_amount = $response['body']['obtaind'];
            $fee = $percent_fee_amount + $depsit_method->fixed_deposit_fee;

            $deposit = ChooseDepositMethod::updateOrCreate([
                'user_id' => Auth::id(),
                'wallet_id' => $wallet->id,
            ],[
                'deposit_method_id' => $depsit_method->id,
                'amount' => $request->amount,
                'fee' => $fee
            ]);

            $data['deposit'] = $deposit;
            return SuccessResponse($data);
            
            
        } catch (\Throwable $th) {
            Log::error('Cheoose Peyment method error. ', $th->getMessage());
            return ErrorResponse('Operation failed.');
        }
    }
}
