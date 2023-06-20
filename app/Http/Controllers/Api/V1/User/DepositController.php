<?php

namespace App\Http\Controllers\Api\V1\User;

use Validator;
use RuntimeException;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\DepositMethod;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;
use App\Models\ChooseDepositMethod;
use Illuminate\Support\Facades\Log;
use Psy\Exception\ThrowUpException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            Log::error('Cheoose Peyment method error. '. $th->getMessage());
            return ErrorResponse('Operation failed.');
        }
    }

    public function BankDeposit(Request $request){
        $validator = Validator::make($request->all(),[
            'proof_file' => 'required',
            'refrence_number' => 'required'
        ]);

        if($validator->fails())
            return ErrorResponse($validator->errors()->first());

        try {
            $choose_deposit = ChooseDepositMethod::where('user_id',Auth::id())->first();
            if(!$choose_deposit) 
                return ErrorResponse('Direct Access not allow.');
            
            if($choose_deposit->deposit_method_id != 1)
                return ErrorResponse('Worong selection of deposit method.');
            
            $wallet = Wallet::find($choose_deposit->wallet_id);
            if(!$wallet)
                return ErrorResponse('Wallet not found');
            $image = $request->file('image')->store('/Transaction Proof/Images', 'public');
            $image_url = Storage::disk('public')->url($image);
            DB::beginTransaction();

                $transaction = Transaction::create([
                    'user_id' => Auth::id(),
                    'wallet_id' => $choose_deposit->wallet_id,
                    'description' => 'Bank transfer',
                    'amount' => '+'.$choose_deposit->amount,
                    'status' => 0,
                    'charges' => $choose_deposit->fee
                ]);

                TransactionDetail::create([
                    'transaction_id' => $transaction->id,
                    'deposit_method_id' => $choose_deposit->deposit_method_id,
                    'amount' => $transaction->amount,
                    'proof_file' => $image_url,
                    'reference_number' => $request->reference_number
                ]);

                Wallet::where('id',$wallet->wallet_id)->update([
                    'credit' => $wallet->balance + $choose_deposit->amount
                ]);

                
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Bank Deposit error : '.$th->getMessage());
        }
    }
}
