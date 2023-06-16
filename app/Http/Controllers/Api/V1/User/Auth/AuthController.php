<?php

namespace App\Http\Controllers\Api\V1\User\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails())
            return ErrorResponse($validator->errors()->first());

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if (!$user->hasRole('User')) {
                return ErrorResponse('You Have not the correct Role.');
            }
            $data['user'] = $user;
            $data['token'] = $user->createToken('UserAccessToken')->plainTextToken;
            return SuccessResponse($data);
        } else
            return ErrorResponse('invalid credentials');
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[\pL\s]+$/u|min:3|max:50',
            'email' => 'required|email|unique:users|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails())
            return ErrorResponse($validator->errors()->first());

        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'email_verified_at' => null,
            ]);


            $user->assignRole('User');
            DB::commit();

            $data['user'] = user::where('id', $user->id)->first();
            $data['token'] = $user->createToken('customerAccessToken')->plainTextToken;
            return SuccessResponse($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return ErrorResponse($th->getMessage());
        }
    }


    public function change_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:8',
        ]);

        if ($validator->fails())
            return ErrorResponse($validator->errors()->first());

        if ($request->new_password != $request->confirm_new_password)
            return ErrorResponse('The password confirmation does not match');

            if (!Hash::check($request->current_password, auth()->user()->password)) {
                return ErrorResponse("Current Password Doesn't match!");
            }
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            return SuccessResponse('Password changed successfully.');

    }
}
