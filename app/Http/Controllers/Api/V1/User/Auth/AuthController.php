<?php

namespace App\Http\Controllers\Api\V1\User\Auth;

use App\Models\User;
use App\Models\UserProfile;
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

    public function storeProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date_of_birth' => 'required|date',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'country_code' => 'required',
            'phone_no' => 'required',
        ]);

        if ($validator->fails())
        return ErrorResponse($validator->errors()->first());

        try {
            $path = '';
            if ($request->hasFile('avatar')) {
                $request->validate([
                    'image' => 'mimes:png,jpg,jpeg,gif'
                ]);
                $path = $request->file('avatar')->store('User/Images', 'public');
            }
            UserProfile::create([
                'user_id' => Auth::id(),
                'date_of_birth' => $request->dob,
                'country' => $request->country,
                'city' => $request->city,
                'address' => $request->address,
                'postal_code' => $request->postal_code,
                'country_code' => $request->country_code,
                'phone_number' => $request->phone_no,
                'avatar' => $path,
            ]);
            return SuccessResponse('User profile created successfully.');
        } catch (\Throwable $th) {
            return ErrorResponse($th->getMessage());
        }
    }
}
