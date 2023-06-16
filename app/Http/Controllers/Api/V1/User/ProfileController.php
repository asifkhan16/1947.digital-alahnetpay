<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $exist_user_profile = UserProfile::where('user_id', Auth::id())->first();
        if ($exist_user_profile) {
            return ErrorResponse('User profile already exist');
        }
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
            $file_path = '';
            if ($request->hasFile('avatar')) {
                $request->validate([
                    'avatar' => 'mimes:png,jpg,jpeg,gif'
                ]);
                $file = $request->file('avatar')->store('User/Images', 'public');
                $file_path = Storage::disk('public')->url($file);
            }
            UserProfile::create([
                'user_id' => Auth::id(),
                'date_of_birth' => $request->date_of_birth,
                'country' => $request->country,
                'city' => $request->city,
                'address' => $request->address,
                'postal_code' => $request->postal_code,
                'country_code' => $request->country_code,
                'phone_number' => $request->phone_no,
                'avatar' => $file_path,
            ]);
            return SuccessResponse('User profile created successfully.');
        } catch (\Throwable $th) {
            return ErrorResponse($th->getMessage());
        }
    }

    public function update(Request $request)
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

        if ($validator->fails()) {
            return ErrorResponse($validator->errors()->first());
        }
        try {
            $file_path = '';
            if ($request->hasFile('avatar')) {
                $request->validate([
                    'avatar' => 'mimes:png,jpg,jpeg,gif'
                ]);
                $file = $request->file('avatar')->store('User/Images', 'public');
                $file_path = Storage::disk('public')->url($file);
            }

            UserProfile::where('user_id', Auth::id())->update([
                'user_id' => Auth::id(),
                'date_of_birth' => $request->date_of_birth,
                'country' => $request->country,
                'city' => $request->city,
                'address' => $request->address,
                'postal_code' => $request->postal_code,
                'country_code' => $request->country_code,
                'phone_number' => $request->phone_no,
                'avatar' => $file_path,
            ]);

            return SuccessResponse('User profile updated successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            return ErrorResponse($th->getMessage());
        }
    }
}
