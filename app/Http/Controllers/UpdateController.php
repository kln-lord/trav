<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

use CURLFile;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Arr;

class UpdateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function checkMethod(Request $request)
    {
        $fullName = DB::table('users')->where('username',Auth::user()->username)->value('fullName');
        $email = DB::table('users')->where('username',Auth::user()->username)->value('email');
        $phoneNumber = DB::table('users')->where('username',Auth::user()->username)->value('phoneNumber');
        $country = DB::table('users')->where('username',Auth::user()->username)->value('country');
        $password = DB::table('users')->where('username',Auth::user()->username)->value('password');

        if($request->hasFile('profile_pic')){
            $pfp = $request->file('profile_pic');
            $destinationPath = 'uploaded-images/';
            $originalFile = $pfp->getClientOriginalName();
            $pfp->move($destinationPath, $originalFile);
        }

        DB::update('update users set fullName = ?, password = ?,phoneNumber = ?,country = ?, profilePicture = ? where username = ?', [$request->newfullname=="" ? $fullName : $request->newfullname,$request->newpass=="" ? $password : bcrypt($request->newpass),$request->newphone == "" ? $phoneNumber : $request->newphone,$request->country == "" ? $country : $request->country,$request->hasFile('profile_pic') ? './uploaded-images/' . $originalFile : Auth::user()->profilePicture ,Auth::user()->username]);



       //dd($request->all());  //to check all the datas dumped from the form
       //if your want to get single element,someName in this case
    //    $someName = $request->someName;

        return back()->with('success','changes were saved successfully!');
    }

    public function deleteMethod(Request $request){
        DB::delete('delete from users where username = ?', [Auth::user()->username]);
        return redirect()->route('logout');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(!Auth::check()) return view('Login');
        if(Auth::user()->username=='ADMIN'){
        $file_path = Auth::user()->profilePicture;
        $api_credentials = array(
            'key' => 'acc_d63abb896cf02ae',
            'secret' => '1e9e0c3d9a0bda7afa8318d4bab8cb08'
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.imagga.com/v2/colors");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_USERPWD, $api_credentials['key'].':'.$api_credentials['secret']);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, 1);
        $fields = [
            'image' => new \CurlFile($file_path, 'image/jpeg', 'image.jpg')
        ];
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        $response = curl_exec($ch);
        curl_close($ch);

        $json_response = json_decode($response);
        // dd($json_response);

        // ////



        $pfpDominantColor = $json_response->result->colors->foreground_colors[1]->closest_palette_color_html_code;

        $fullName = DB::table('users')->where('username',Auth::user()->username)->value('fullName');
        $email = DB::table('users')->where('username',Auth::user()->username)->value('email');
        $phoneNumber = DB::table('users')->where('username',Auth::user()->username)->value('phoneNumber');
        $country = DB::table('users')->where('username',Auth::user()->username)->value('country');
        $pfp = DB::table('users')->where('username',Auth::user()->username)->value('profilePicture');
        return view('pages-profile',['fullName' => $fullName,'email' => $email,'phoneNumber' => $phoneNumber,'country' => $country,'pfp' => $pfp,'pfpDominantColor' => $pfpDominantColor]);
        }else{
            $fullName = DB::table('users')->where('username',Auth::user()->username)->value('fullName');
            $email = DB::table('users')->where('username',Auth::user()->username)->value('email');
            $phoneNumber = DB::table('users')->where('username',Auth::user()->username)->value('phoneNumber');
            $country = DB::table('users')->where('username',Auth::user()->username)->value('country');
            $pfp = DB::table('users')->where('username',Auth::user()->username)->value('profilePicture');
            return view('pages-profile',['fullName' => $fullName,'email' => $email,'phoneNumber' => $phoneNumber,'country' => $country,'pfp' => $pfp]);

        }
    }

}
