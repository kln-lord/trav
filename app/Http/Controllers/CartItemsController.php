<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;

class CartItemsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function checkoutMethod(Request $request)
    {
        if(DB::table('numberOftrips')->where('username',Auth::user()->username)->count()==0){
             DB::insert('insert into numberOftrips values (?, ?)', [Auth::user()->username, 0]);
        }
        $results = DB::select("select * from cartItems where username = ?",[Auth::user()->username]);
        if(!empty($results)){
            //delete expired cart items first then check out;
            $num_expired = DB::table('cartItems')->where('username',Auth::user()->username)->where('timeLeft','Expired')->count();
            if($num_expired>0) return back()->with('error','delete Expired trips first!');

            $amountToPay = DB::table('cartItems')->where('username',Auth::user()->username)->where('timeLeft','!=','Expired')->sum('price');
            if($amountToPay<=Auth::user()->balance){
                DB::update('update users set balance = ? where username = ?', [Auth::user()->balance-$amountToPay,Auth::user()->username]);
                DB::update('update numberOftrips set number_of_trips = ? where username = ?',[DB::table('cartItems')->where('username',Auth::user()->username)->where('timeLeft','!=','Expired')->count()+DB::table('numberOftrips')->where('username',Auth::user()->username)->value('number_of_trips'),Auth::user()->username]);
                DB::statement("INSERT into PaidOrders (SELECT * FROM cartItems WHERE username = ? and timeLeft != ?)",[Auth::user()->username,'Expired']);
                DB::delete('delete from cartItems where username = ?', [Auth::user()->username]);

                return back()->with('success','checkout was done successfully!');

            }else return back()->with('error','not enough balance!');

        }else{
            return back()->with('warning','you have no items to check out');
        }






       //dd($request->all());  //to check all the datas dumped from the form
       //if your want to get single element,someName in this case
    //    $someName = $request->someName;

        return redirect()->route('profile');
    }

    public function deleteMethod(Request $request){
        DB::delete('delete from cartItems where username = ? and id = ?', [Auth::user()->username,$request->id]);
        return back()->with('success','items was removed successfully!');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            $items = DB::select('select * from cartItems where username = ?', [Auth::user()->username]);
            $count = DB::table('cartItems')->where('username',Auth::user()->username)->count();

            for ($i=0; $i < $count; $i++) {
                $now = new DateTime(); // or your date as well
                $your_date = new DateTime($items[$i]->departing_date);
                $datediff = $now->diff($your_date)->format("%r%a") . " : " .$now->diff($your_date)->format("%r%h") . " : " . $now->diff($your_date)->format("%r%i");
                if($now->diff($your_date)->format("%r%a")<=0 && $now->diff($your_date)->format("%r%h")<=0 && $now->diff($your_date)->format("%r%i")<=0){
                    $datediff = "Expired";
                }
                DB::update('update cartItems set timeLeft = ? where username = ? and id = ?', [$datediff,Auth::user()->username,$items[$i]->id]);

            }


            $results = DB::select('select * from cartItems where username = ?', [Auth::user()->username]);
            return view('checkout-page',['results' => $results]);
        }
        return view('auth.login');
    }

}
