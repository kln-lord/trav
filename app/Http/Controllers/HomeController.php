<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Tracker;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


    public function redirectingPageMethod(Request $request){
        return view("redirectingPage",['url'=>$request->url]);

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if(!Auth::check()){
            return view('home');
        }

        $number_of_items_in_cart = DB::table('cartItems')->where('username',Auth::user()->username)->count();
        return view('home',['number_of_items_in_cart'=>$number_of_items_in_cart]);
    }
}
