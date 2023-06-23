<?php

namespace App\Http\Controllers\Admin;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index(){
        // dd(request()->input('status'));
        if(request()->input('status') == -1){
            $cards = Card::with('user')->get();
        }else{
            $cards = Card::with('user')->where('status',request()->input('status'))->get();
        }
        
        return view('admin.card.index')->with('cards',$cards);
        
    }
}
