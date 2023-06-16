<?php

namespace App\Http\Controllers\Api\V1\User;

use Validator;
use Illuminate\Http\Request;
use App\Models\KycVerification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KycVerificationController extends Controller
{
    public function store(Request $request)
    {
        $verification_request_exist = KycVerification::where('user_id',Auth::id())->first();
        if($verification_request_exist)
        return ErrorResponse('You have already submitted your KYC verification.');
        $validator = Validator::make($request->all(), [
            'document_front' => 'required|mimes:png,jpg,jpeg,gif'
        ]);

        if ($request->hasFile('document_back')) {
            $validator = Validator::make($request->all(), [
                'document_back' => 'mimes:png,jpg,jpeg,gif'
            ]);
            if ($validator->fails())
                return ErrorResponse($validator->errors()->first());
        }
        try {
            $document_front_file = $request->file('document_front')->store('User/kyc-verification', 'public');
            $document_front_file_path = Storage::disk('public')->url($document_front_file);
            $document_back_file_path = '';
            if ($request->hasFile('document_back')) {
                $document_back_file = $request->file('document_back')->store('User/kyc-verification', 'public');
                $document_back_file_path = Storage::disk('public')->url($document_back_file);
            }

            KycVerification::create([
                'user_id' => Auth::id(),
                'document_front' => $document_front_file_path,
                'document_back' => $document_back_file_path,
                'status' => 0
            ]);
            return SuccessResponse('Thank you for submitting your KYC verification');
        } catch (\Throwable $th) {
            return ErrorResponse($th->getMessage());
        }
    }
}
