<?php

namespace App\Http\Controllers\Admin;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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

    public function ApproveOrRejectCard(Card $card){
        // dd($card);
        try {
            $data = [
                'status' => request()->input('status')
            ];
            if(request()->input('status') == 1){
                $current_date = Carbon::now();
                $issue_date = $current_date->format('Y-m-d');
                $expiry_date = $current_date->addYear()->subDay();
                $expiry_date = $expiry_date->format('Y-m-d');

                $data['issue_date'] = $issue_date;
                $data['expiry_date'] = $expiry_date;
            }
            // dd($data);
            Card::where('id',$card->id)->update($data);
            return back()->with('success','Action perform successfully.');
        } catch (\Throwable $th) {
            Log::error("Approve Or Reject Card Error : ". $th->getMessage());
            return back()->with('error','Operation Failed');
        }
    }
}
