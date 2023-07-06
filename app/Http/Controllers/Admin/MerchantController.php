<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
        if (request()->input('status') == -1) {
            $merchants = Merchant::with('business_kyc_verification','user')->get();
            // dd($merchants->toArray());s
        } else {
            $merchants = Merchant::with('business_kyc_verification','user')->where('status', request()->input('status'));
        }

        return view('admin.merchant.index')->with('merchants', $merchants);
    }
}
