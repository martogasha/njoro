<?php

namespace App\Http\Controllers;

use App\Assign;
use App\Counter;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class CounterController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $getUserId = Counter::where('user_id',Auth::id())->first();
            $stocks = Assign::where('counter_id',$getUserId->user_id)->get();
            $products = Stock::all();
            return view('client.counter', [
                'stocks' => $stocks,
                'products' => $products,
                'getUserId'=>$getUserId
            ]);
        }
        else{
            return redirect(url('/'))->with('error','NO ACCESS');
        }
    }
}
