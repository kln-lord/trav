<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function clearAllMethod(Request $request){
        DB::delete('delete from favorites where username = ?', [Auth::user()->username]);
        return back()->with('success','favorites were removed successfully!');
    }

    public function AddToFavoritesMethod(Request $request){
        if($request->state=="Like") {
            DB::update('update buttons set state = ? where username = ? and id = ?', ['Liked',Auth::user()->username,$request->buttonId]);
            if(DB::table('favorites')->where('username',Auth::user()->username)->where('namei',$request->image)->count()==0)
            DB::insert('insert into favorites(username,namei) values (?, ?)', [Auth::user()->username, $request->image]);
        }
        else {
            DB::update('update buttons set state = ? where username = ? and id = ?', ['Like',Auth::user()->username,$request->buttonId]);
            DB::delete('delete from favorites where username = ? and namei = ?', [Auth::user()->username,$request->image]);

        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $images = DB::select('select * from favorites where username = ?', [Auth::user()->username]);
        return view('favorites-page',['images'=>$images]);
    }
}
