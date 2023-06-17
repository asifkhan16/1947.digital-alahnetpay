<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KycVerification;
use Illuminate\Http\Request;

class KycController extends Controller
{
    public function index()
    {
        $kyc_s = KycVerification::with('user')->get();
        return view('admin.kyc-verification.index')->with('kyc_s', $kyc_s);
    }
    public function kyc_pending()
    {
        $pending_kyc = KycVerification::with('user')->where('status', 0)->get();
        return view('admin.kyc-verification.pending')->with('pending_kyc', $pending_kyc);
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
