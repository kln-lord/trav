<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function changeThemeMethod(Request $request){
        if(Auth::user()->theme=='dark'){
            DB::update('update users set theme = ? where username = ?', ['light',Auth::user()->username]);
        }else DB::update('update users set theme = ? where username = ?', ['dark',Auth::user()->username]);
        return back();
    }
}
