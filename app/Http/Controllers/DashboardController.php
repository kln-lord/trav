<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            //user info
            $balance_column = DB::table('users')->where('username',Auth::user()->username)->value('balance');
            $balance = number_format($balance_column,2,".",",");
            $number_flights = DB::table('numberOftrips')->where('username',Auth::user()->username)->value('number_of_trips');
            $number_favorites = DB::table('favorites')->where('username',Auth::user()->username)->count('namei');

            //trips history
            $PaidTrips = DB::select('select * from paidOrders where username = ?', [Auth::user()->username]);
            if(Auth::user()->username=="ADMIN") {
                $users = DB::select('select * from users where username != ?',[Auth::user()->username]);
                return view('adminDashboard',['balance' => $balance,'number_flights' => $number_flights,'number_favorites' => $number_favorites,'PaidTrips'=>$PaidTrips,'users'=>$users]);
            }
            else return view('dashboard',['balance' => $balance,'number_flights' => $number_flights=="" ? 0 : $number_flights,'number_favorites' => $number_favorites,'PaidTrips'=>$PaidTrips]);



        }else return view('Login');
    }
}
