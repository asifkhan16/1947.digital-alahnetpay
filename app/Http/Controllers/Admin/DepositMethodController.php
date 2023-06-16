<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\DepositMethod;
use Storage;

class DepositMethodController extends Controller
{
    public function index(){
        return Inertia::render('DepositMethod/Index');
    }
    public function create(){
        return Inertia::render('DepositMethod/Create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'image_url' => 'required',
            'fixed_deposit_fee' => 'required',
            'percentage_deposit_fee' => 'required',
            'status' => 'required'
        ]);

        try {
            $image = $request->file('image_url')->store('/DepositMethod/Image','public');
            $image_url = Storage::disk('public')->url($image);

            DepositMethod::create([
                'name' => $request->name,
                'image_name' => $image,
                'image_url' => $image_url,
                'fixed_deposit_fee' => $request->fixed_deposit_fee,
                'percentage_deposit_fee' => $request->percentage_deposit_fee,
                'status' => $request->status
            ]);

            return back()->with(['success' => 'true', 'message' => 'Deposit Method Added Successfully.']);
        } catch (\Throwable $th) {
            Log::error('Deposit method Store Error : '. $th->getMessage());
            return back()->with(['success' => 'false', 'message' => 'Operation Faield.']);
        }
    }

    
}
