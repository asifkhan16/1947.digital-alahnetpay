<?php

namespace App\Http\Controllers\Admin;

use App\Models\Currency;
use Illuminate\Http\Request;
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
            'image' => $image_url
        ]);

        return redirect()->route('currencies.index')->with('success','Currency Created Succssfully');
    }
}
