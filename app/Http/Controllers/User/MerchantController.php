<?php

namespace App\Http\Controllers\User;

use App\Models\Merchant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business_kyc_verfication;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MerchantController extends Controller
{
    public function index()
    {
        return view('user.merchant.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'store_name' => 'required|unique:merchants,store_name',
            'document_one' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $merchant =  Merchant::create([
                'user_id' => Auth::id(),
                'store_name' => $request->store_name,
                'store_address' => $request->store_address,
                'website_url' => $request->website_url,
                'client_id' => str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT) + Auth::id(),
                'client_secret' => Str::random(20),
                'status' => 0
            ]);

            $document_one = $request->file('document_one')->store('/Business_kyc_verifications/Images', 'public');
            $document_one_url = Storage::disk('public')->url($document_one);
            $document_two_url = '';

            if ($request->hasFile('document_two')) {
                $document_two = $request->file('document_two')->store('/Business_kyc_verifications/Images', 'public');
                $document_two_url = Storage::disk('public')->url($document_two);
            }

            Business_kyc_verfication::create([
                'merchant_id' => $merchant->id,
                'document_one' => $document_one_url,
                'document_two' => $document_two_url,
                'status' => 0
            ]);
            DB::commit();
            return view('user.merchant.index')->with('success', 'Request submitted!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
