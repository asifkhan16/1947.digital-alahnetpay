<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KycVerification;
use Illuminate\Http\Request;

class KycController extends Controller
{
    public function index()
    {
        if(request()->input('status') == -1){
            $kyc_s = KycVerification::with('user')->get();
        }else{
            $kyc_s = KycVerification::with('user')->where('status', request()->input('status'))->get();
        }
        return view('admin.kyc-verification.index')->with('kyc_s', $kyc_s);
    }

    public function ApproveOrRejectKyc(KycVerification $kyc){
        // dd(request()->input('status'));

        KycVerification::where('id',$kyc->id)->update([
            'status' => request()->input('status'),
        ]);

        return back()->with('success','Action performed successfully.');
    }
    public function kyc_pending()
    {
        // return view('admin.kyc-verification.pending')->with('pending_kyc', $pending_kyc);
    }

    public function kyc_completed()
    {
        $completed_kyc = KycVerification::with('user')->where('status', 1)->get();
        return view('admin.kyc-verification.completed')->with('pending_kyc', $completed_kyc);
    }

    public function kyc_canceled()
    {
        $denied_kyc = KycVerification::with('user')->where('status', 2)->get();
        return view('admin.kyc-verification.canceled')->with('pending_kyc', $denied_kyc);
    }
}
