<?php

namespace App\Http\Controllers\Api\V1\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'error' => $validator->errors()->first(),
                'body' => null
            ]);
        }
            return ErrorResponse($validator->errors()->first());



        $credentials = $request->only('email','password');


        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if(!$user->hasRole('Admin')){
                return ErrorResponse('You Have not the correct Role.');
            }


            $data['user'] = $user;
            $data['accessToken'] = $user->createToken('AdminAccessToken')->accessToken;
            return SuccessResponse($data);
        } else
            return ErrorResponse('invalid credentials');
    }

    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|regex:/^[\pL\s]+$/u|min:3|max:50',
    //         'email' => 'required|email|unique:users|regex:/(.+)@(.+)\.(.+)/i',
    //         'phone_number' => 'required|min:7|max:17',
    //         'password' => 'required|min:8',
    //         'fcm_token' => 'required',
    //         'device_id' => 'required',
    //     ]);

    //     if ($validator->fails())
    //         return ErrorResponse($validator->errors()->first());

    //     try {
    //         DB::beginTransaction();
    //         $user = User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => bcrypt($request->password),
    //             'email_verified_at' => null,
    //         ]);
    //         Wallet::create([
    //             'user_id' => $user->id
    //         ]);
    //         $customer = Customer::create([
    //             'user_id' => $user->id,
    //             'phone_number' => $request->phone_number
    //         ]);
    //         $user->assignRole('customer');

    //         $response = createOrAuthenticateFirebaseUser($user);

    //         if($response['success'] == false){
    //             return ErrorResponse($response['error']);
    //         }

    //         $firebase_custom_token = $response['body']['firebase_custom_token'];

    //         Fcm::updateOrCreate([
    //             'device_id' => $request->device_id,
    //         ],
    //         [
    //             'customer_id' => $customer->id,
    //             'fcm_token' => $request->fcm_token
    //         ]);
    //         DB::commit();

    //         $data['customer'] = Customer::with('user')->where('user_id', $user->id)->first();
    //         $data['token'] = $user->createToken('customerAccessToken')->accessToken;
    //         $data['firebase_custom_token'] = $firebase_custom_token;
    //         return SuccessResponse($data);

    //     } catch (\Throwable $th) {
    //         DB::rollBack();
    //         return ErrorResponse($th->getMessage());
    //     }
    // }
}
