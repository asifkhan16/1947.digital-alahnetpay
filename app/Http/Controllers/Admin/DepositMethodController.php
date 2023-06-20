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
    public function index()
    {
        $deposit_methods = DepositMethod::all();
        // dd($deposit_methods->toArray());
        return view('admin.deposit-method.index')->with('deposit_methods', $deposit_methods);
    }
    public function create()
    {
        return view('admin.deposit-method.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'fixed_deposit_fee' => 'required',
            'percentage_deposit_fee' => 'required',
            'status' => 'required'
        ]);

        try {
            $image = $request->file('image')->store('/DepositMethod/Image', 'public');
            $image_url = Storage::disk('public')->url($image);

            DepositMethod::create([
                'name' => $request->name,
                'image_url' => $image_url,
                'fixed_deposit_fee' => $request->fixed_deposit_fee,
                'percentage_deposit_fee' => $request->percentage_deposit_fee,
                'status' => $request->status
            ]);

            return redirect()->route('deposit-methods')->with(['success' => 'true', 'message' => 'Deposit Method Added Successfully.']);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            Log::error('Deposit method Store Error : ' . $th->getMessage());
            return back()->with(['success' => 'false', 'message' => 'Operation Faield.']);
        }
    }

    public function edit(DepositMethod $deposit_method)
    {
        return view('admin.deposit-method.edit')->with('method', $deposit_method);
    }

    public function update(Request $request, DepositMethod $method)
    {
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

            if ($request->hasFile('image')) {
                if (Storage::disk('public')->exists($method->image_name))
                    Storage::disk('public')->delete($method->image_name);

                $image = $request->file('image')->store('/DepositMethod/Image', 'public');
                $image_url = Storage::disk('public')->url($image);

                $data['image_name'] = $image;
                $data['image_url'] = $image_url;
            }

            DepositMethod::where('id', $method->id)->update($data);

            return redirect()->route('deposit-methods')->with(['success' => 'true', 'message' => 'Deposit Method Updated Successfully.']);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            Log::error('Deposit method Update Error : ' . $th->getMessage());
            return back()->with(['success' => 'false', 'message' => 'Operation Faield.']);
        }
    }

    public function destroy(DepositMethod $depositMethod)
    {

        try {
            if (Storage::disk('public')->exists($depositMethod->image_name))
                Storage::disk('public')->delete($depositMethod->image_name);
        } catch (FileNotFoundException $th) {
            Log::error($th->getMessage());
        }

        $depositMethod->delete();

        return back()->with(['success' => 'true', 'message' => 'Deposit method deleted successfully.']);
    }
}
