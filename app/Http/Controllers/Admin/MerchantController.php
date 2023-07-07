<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business_kyc_verfication;
use App\Models\Merchant;
use DB;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
        if (request()->input('status') == -1) {
            $merchants = Merchant::with('business_kyc_verification', 'user')->get();
            // dd($merchants->toArray());s
        } else {
            $merchants = Merchant::with('business_kyc_verification', 'user')->where('status', request()->input('status'));
        }

        return view('admin.merchant.index')->with('merchants', $merchants);
    }

    public function ApproveBusinessKycVerfication(Merchant $merchant)
    {
        try {
            DB::beginTransaction();
            Merchant::where('id', $merchant->id)->update([
                'status' => 1,
            ]);
            Business_kyc_verfication::where('merchant_id', $merchant->id)->update([
                'status' => 1
            ]);

            DB::commit();
            return back()->with('success', 'Business Kyc vervification approved successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
    public function RejectBusinessKycVerfication(Merchant $merchant)
    {

        try {
            DB::beginTransaction();
            Merchant::where('id', $merchant->id)->update([
                'status' => 2,
            ]);
            Business_kyc_verfication::where('merchant_id', $merchant->id)->update([
                'status' => 2
            ]);
            DB::commit();
            return back()->with('success', 'Business Kyc vervification Rejected successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
