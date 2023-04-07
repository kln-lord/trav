<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PayementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function PayementMethod(Request $request){
        DB::update('update users set balance = ? where username = ?', [$request->amount+Auth::user()->balance,Auth::user()->username]);
        return redirect()->route('dashboard')->with('success',number_format($request->amount,2,".",",") . '$ was added to your balance successfully!');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $number_of_items_in_cart = DB::table('cartItems')->where('username',Auth::user()->username)->count();
        return view('home',['number_of_items_in_cart'=>$number_of_items_in_cart]);
    }
}
