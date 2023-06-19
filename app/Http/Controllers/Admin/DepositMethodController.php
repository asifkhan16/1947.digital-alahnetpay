<?php

namespace App\Http\Controllers\Admin;

use Storage;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\DepositMethod;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class DepositMethodController extends Controller
{
    public function index(){
        return view('DepositMethod/Index');
    }
    public function create(){
        return view('DepositMethod/Create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'fixed_deposit_fee' => 'required',
            'percentage_deposit_fee' => 'required',
            'status' => 'required'
        ]);

        try {
            $image = $request->file('image')->store('/DepositMethod/Image','public');
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

    public function update(Request $request, DepositMethod $depositMethod){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'fixed_deposit_fee' => 'required',
            'percentage_deposit_fee' => 'required',
            'status' => 'required'
        ]);

        try {

            $data = [
                'name' => $request->name,
                'fixed_deposit_fee' => $request->fixed_deposit_fee,
                'percentage_deposit_fee' => $request->percentage_deposit_fee,
                'status' => $request->status
            ];

            if($request->hasFile('image')){
                if(Storage::disk('public')->exists($depositMethod->image_name))
                    Storage::disk('public')->delete($depositMethod->image_name);

                $image = $request->file('image')->store('/DepositMethod/Image','public');
                $image_url = Storage::disk('public')->url($image);

                $data['image_name'] = $image;
                $data['image_url'] = $image_url;

            }

            DepositMethod::where('id',$depositMethod->id)->update($data);

            return back()->with(['success' => 'true', 'message' => 'Deposit Method Updated Successfully.']);

        } catch (\Throwable $th) {
            Log::error('Deposit method Update Error : '. $th->getMessage());
            return back()->with(['success' => 'false', 'message' => 'Operation Faield.']);
        }
    }

    public function destroy(DepositMethod $depositMethod){

        try {
            if(Storage::disk('public')->exists($depositMethod->image_name))
                Storage::disk('public')->delete($depositMethod->image_name);
        } catch (FileNotFoundException $th) {
            Log::error($th->getMessage());
        }

        $depositMethod->delete();

        return back()->with(['success' => 'true', 'message' => 'Deposit method deleted successfully.']);
    }
}
