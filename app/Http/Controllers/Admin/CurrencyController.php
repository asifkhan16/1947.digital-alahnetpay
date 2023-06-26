<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wallet;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CurrencyController extends Controller
{
    public function index(){
        $currencies = Currency::all();
        return view('admin.currencies.index')->with('currencies',$currencies);
    }

    public function create(){
        return view('admin.currencies.create');
    }

    public function store(Request $request){
        $request->validate([
            'country_name' => 'required',
            'country_code' => 'required|unique:currencies',
            'currency_code' => 'required|unique:currencies',
            'image' => 'required'
        ]);

        $image = $request->file('image')->store('/Countries/Images', 'public');
        $image_url = Storage::disk('public')->url($image);

        Currency::create([
            'country_name' => $request->country_name,
            'country_code' => $request->country_code,
            'currency_code' => $request->currency_code,
            'flag_url' => $image_url
        ]);

        return redirect()->route('currencies.index')->with('success','Currency Created Succssfully');
    }

    public function edit(Currency $currency){
        return view('admin.currencies.edit')->with('currency',$currency);
    }

    public function update(Request $request, Currency $currency){
        $request->validate([
            'country_name' => 'required',
            'country_code' => 'required|'.Rule::unique('currencies')->ignore($currency->id),
            'currency_code' => 'required|'.Rule::unique('currencies')->ignore($currency->id),
            'image' => 'required'
        ]);

        $data = [
            'country_name' => $request->country_name,
            'country_code' => $request->country_code,
            'currency_code' => $request->currency_code,
        ];

        if($request->hasFile('image')){
            $image = $request->file('image')->store('/Countries/Images', 'public');
            $image_url = Storage::disk('public')->url($image);
            $data['flag_url'] = $image_url;
        }

        Currency::where('id',$currency->id)->update($data);

        return redirect()->route('currencies.index')->with('success','Currency Updated Succssfully');
    }

    public function destroy(Currency $currency){
        $is_curreny_used = Wallet::where('currency_id',$currency->id)->first();

        if($is_curreny_used)
            return redirect()->route('currencies.index')->with('error',"Currency is already used you can't delete it");

        $currency->delete();
        return redirect()->route('currencies.index')->with('success','Currency deleted Succssfully');
    }
}
