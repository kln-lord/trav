<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use DateTime;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function searchMethod(Request $request)
    {
        // $curl = curl_init();

        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://openai80.p.rapidapi.com/chat/completions",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => "{
        //     \"model\": \"gpt-3.5-turbo\",
        //     \"messages\": [
        //         {
        //             \"role\": \"user\",
        //             \"content\": \"$request->goingTo Tourism\"
        //         }
        //     ],
        //     \"max_tokens\": 50
        // }",
        //     CURLOPT_HTTPHEADER => [
        //         "X-RapidAPI-Host: openai80.p.rapidapi.com",
        //         "X-RapidAPI-Key: e6d00f6155mshae049dc6e8e49b1p13e279jsn0312909c6605",
        //         "content-type: application/json"
        //     ],
        // ]);

        // $response = json_decode(curl_exec($curl));
        // $err = curl_error($curl);

        // curl_close($curl);

        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        // }

        $results = DB::select("SELECT * FROM offers WHERE destination = ? and price <= ?",[$request->goingTo,$request->yourBudget]);
        return view('searchResults',['results'=>$results,'destination' => $request->goingTo,'departing_date'=>$request->checkIn]);






       //dd($request->all());  //to check all the datas dumped from the form
       //if your want to get single element,someName in this case
    //    $someName = $request->someName;
    }


    public function addMethod(Request $request){
        if(Auth::check()){
            $now = new DateTime(); // or your date as well
            $your_date = new DateTime($request->departing_date);
            $datediff = $now->diff($your_date)->format("%r%a") . " : " .$now->diff($your_date)->format("%h") . " : " . $now->diff($your_date)->format("%i");
            $result = DB::select("SELECT * FROM offers WHERE id = ? ",[$request->id]);
            DB::insert('insert into cartItems(username,title,price,departing_date,image,timeLeft) values(?, ?, ?, ?, ?, ?)', [Auth::user()->username, $result[0]->destination . ' ' . $result[0]->offer,$result[0]->price,$request->departing_date,$result[0]->destination,$datediff]);
            return redirect()->route('home')->with('success','item was added to cart!');

        }else return view('Login');


    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!Auth::check()) return view('auth.login');
        $fullName = DB::table('users')->where('username',Auth::user()->username)->value('fullName');
        $email = DB::table('users')->where('username',Auth::user()->username)->value('email');
        $phoneNumber = DB::table('users')->where('username',Auth::user()->username)->value('phoneNumber');
        $country = DB::table('users')->where('username',Auth::user()->username)->value('country');
        $pfp = DB::table('users')->where('username',Auth::user()->username)->value('profilePicture');
        return view('pages-profile',['fullName' => $fullName,'email' => $email,'phoneNumber' => $phoneNumber,'country' => $country,'pfp' => $pfp]);
    }

}
