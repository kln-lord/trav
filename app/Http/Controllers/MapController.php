<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class MapController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getLocationMethod(Request $request){
        $COUNTRY = array(
            "Agadir" => "AGA",
            "agadir" => "AGA",
            "London" => "LON",
            "london" => "LON",
            "Marrakesh" => "RAK",
            "marrakesh" => "RAK",
            "Paris" => "PAR",
            "paris" => "PAR"



        );
        return view('map',['location' => $COUNTRY[$request->location]]);
    }

    public function userDetails(Request $request)
    {
        $ip = '105.158.20.214'; //For static IP address get
        //$ip = request()->ip(); //Dynamic IP address get
        $data = Location::get($ip);
        return view('map',compact('data'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
