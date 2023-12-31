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
    public function tesitng(){
        // $app_id = 'YOUR_APP_ID';
        // $app_secret = 'YOUR_APP_SECRET';
        // $campaign_id = 'YOUR_CAMPAIGN_ID';
        // $date_start = 'YYYY-MM-DD';
        // $date_end = 'YYYY-MM-DD';
        $app_id = 'YOUR_APP_ID';
        $app_secret = 'YOUR_APP_SECRET';
        $campaign_id = '6326850223140';
        $date_start = '2023-01-01';
        $date_end = '2023-06-26';

//         6326850223140
// 6313321250340
// 6312046046340

        // Step 1: Get a short-lived user access token
        // $short_token_url = "https://graph.facebook.com/v17.0/oauth/access_token?client_id={$app_id}&client_secret={$app_secret}&grant_type=client_credentials";
        // $short_token_response = file_get_contents($short_token_url);
        // $short_token_data = json_decode($short_token_response, true);

        // if (!isset($short_token_data['access_token'])) {
        //     return ErrorResponse('Failed to obtain short-lived access token.');
        //     echo 'Failed to obtain short-lived access token.';
        //     exit;
        // }

        // $access_token = $short_token_data['access_token'];

        // Generate the API endpoint URL
        $endpoint = "https://graph.facebook.com/v17.0/{$campaign_id}/ads";
        $url = "https://graph.facebook.com/v17.0/{$campaign_id}/insights";

        // Create the cURL resource
        $ch = curl_init();

        // Set the cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . "EAAOAv6M6tzABAJ6nO50vyOB3LApyDiBAVCMdgJ3djtrwD1GThA96ClJBuccASZBnkM385FUIQQzmSh7WhbzzoZAJ4vUn1EPEBoQZBKltZAGgHOJW2TWEToyo8MFpYzcZCby5hWn3ZAvzQLULGqvdC688yg1CR2ZAuNynywJi6uuRlW1EZB9jwROz1UUiaIw18jHwgsJgVkp9gAZDZD",
            // 'Authorization: Bearer ' . $access_token,
        ]);

        // Set the request parameters
        $params = [
            'time_range' => [
                'since' => $date_start,
                'until' => $date_end,
            ],
            'fields' => 'ad_name,ad_id,clicks,spend,date_start,date_stop',
        ];
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));

        // Execute the cURL request
        $response = curl_exec($ch);

        // Check for errors
        if ($response === false) {
            $error = curl_error($ch);
            echo "cURL Error: " . $error;
            exit;
        }

        // Close the cURL resource
        curl_close($ch);

        // Decode the JSON response
        $data = json_decode($response, true);
        return SuccessResponse($data);
        // Display the result
        foreach ($data['data'] as $ad) {
            echo "Ad Name: " . $ad['ad_name'] . "\n";
            echo "Ad ID: " . $ad['ad_id'] . "\n";
            echo "Clicks: " . $ad['clicks'] . "\n";
            echo "Spend: " . $ad['spend'] . "\n";
            echo "Landing Page URL: " . $ad['landing_page_url'] . "\n";
            echo "Date Start: " . $ad['date_start'] . "\n";
            echo "Date Stop: " . $ad['date_stop'] . "\n\n";
        }
    }
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
