<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// $con = new mysqli("localhost","root","","loginSystem");
// $result = mysqli_query($con,"SELECT * FROM users WHERE username = 'ahmedben'");
// $row = mysqli_fetch_array($result);
// $username = $row['username'];

Route::get('/', function () {
    return view('home');
});
// Route::get('/', function () {
//     $users = DB::select("select * from users", [1]);
//     $username = DB::table('users')->where('username','!=','ahmedben')->value('username');
//     return view('home',["users"=>$users,"username"=>$username]);
// });

Route::get('/login', function () {
    return view('Login');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/logout', function(){
    Auth::logout();
    return view('home');

 });

Route::get('/dashboard', function(){
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
            return view('dashboard',['balance' => $balance,'number_flights' => $number_flights,'number_favorites' => $number_favorites,'PaidTrips'=>$PaidTrips,'users'=>$users]);
        }
        else return view('dashboard',['balance' => $balance,'number_flights' => $number_flights=="" ? 0 : $number_flights,'number_favorites' => $number_favorites,'PaidTrips'=>$PaidTrips]);


    }else return view('Login');

});

Route::get('/profile',function(){
    if(Auth::check()){
        $fullName = DB::table('users')->where('username',Auth::user()->username)->value('fullName');
        $email = DB::table('users')->where('username',Auth::user()->username)->value('email');
        $phoneNumber = DB::table('users')->where('username',Auth::user()->username)->value('phoneNumber');
        $country = DB::table('users')->where('username',Auth::user()->username)->value('country');
        $pfp = DB::table('users')->where('username',Auth::user()->username)->value('profilePicture');
        return view('pages-profile',['fullName' => $fullName,'email' => $email,'phoneNumber' => $phoneNumber,'country' => $country,'pfp' => $pfp]);
    }else return view('Login');
});


Route::get('/checkout',function(){
    if(Auth::check()){
        $departing_date = DB::table('cartItems')->where('username',Auth::user()->username)->value('departing_date');
        $now = new DateTime(); // or your date as well
        $your_date = new DateTime($departing_date);
        $datediff = $now->diff($your_date)->format("%r%a") . " : " .$now->diff($your_date)->format("%h") . " : " . $now->diff($your_date)->format("%i");
        DB::update('update cartItems set timeLeft = ? where username = ?', [$datediff,Auth::user()->username]);
        $results = DB::select('select * from cartItems where username = ?', [Auth::user()->username]);
        return view('checkout-page',['results' => $results]);
    }else return view('Login');
});

Route::get('/deposit-form',function(){
    if(Auth::check()){
        return view('deposit');
    }else return view('Login');
});

Route::get('/map',function(){
    if(Auth::check()){
        return view('map');
    }else return view('Login');
});

Route::get('/favorites',function(){
    if(Auth::check()){
        $images = DB::select('select * from favorites where username = ?', [Auth::user()->username]);
        return view('favorites-page',['images'=>$images]);
    }else return view('Login');
});

Route::get('/offers',function(){
    if(Auth::check()){


   $buttons = DB::select('select * from buttons where username = ? order by id', [Auth::user()->username]);
   if(empty($buttons)) {
    for ($i=1; $i < 10; $i++) {
        DB::insert('insert into buttons (id, username) values (?, ?)', ['btn-secondary'.$i, Auth::user()->username]);
        $buttons = DB::select('select * from buttons where username = ? order by id', [Auth::user()->username]);
    }

   }
   return view('offers',['buttons' => $buttons]);
    }else return view('Login');
});


Route::get('/buttonsPage',function(){
    return view('buttonsPage');
 });

 Route::get('/usersTable',function(){
    $users = DB::select('select * from users where username != ?', [Auth::user()->username]);
    if(Auth::user()->username=="ADMIN") return view('table-basic',['users'=>$users]);
 });

 Route::get('/flights',function(){
    if(Auth::check()){
        return view('flights');
    }else return view('Login');
 });

 Route::get('/redirecting',function(){
    if(Auth::check()){
        return view('redirectingPage');
    }else return view('Login');
 });

 Route::get('/register_user',function(){
    if(!Auth::check()){
        return view('Register');
    }else return view('home');
 });

 Route::get('/login_user',function(){
    if(!Auth::check()){
        return view('Login');
    }else return view('home');
 });

 Route::get('/email_verification',function(){
    return view('verify');
 });

Route::post('/update_profile',[App\Http\Controllers\UpdateController::class, 'checkMethod']);

Route::post('/delete_account',[App\Http\Controllers\UpdateController::class, 'deleteMethod']);

Route::post('/cartItems_delete',[App\Http\Controllers\CartItemsController::class, 'deleteMethod']);

Route::post('/checkout_cartItems',[App\Http\Controllers\CartItemsController::class, 'checkoutMethod']);

Route::post('/search-results',[App\Http\Controllers\SearchController::class, 'searchMethod']);

Route::post('/addToCart',[App\Http\Controllers\SearchController::class, 'addMethod']);

Route::post('/getLocation',[App\Http\Controllers\MapController::class, 'getLocationMethod']);

Route::post('/deposit',[App\Http\Controllers\PayementController::class, 'PayementMethod']);

Route::post('/addToFav',[App\Http\Controllers\FavController::class, 'AddToFavoritesMethod']);

Route::post('/redirectingPage',[App\Http\Controllers\HomeController::class, 'redirectingPageMethod']);

Route::post('/changeTheme',[App\Http\Controllers\ThemeController::class, 'changeThemeMethod']);



Route::get('/map',[App\Http\Controllers\MapController::class, 'userDetails']);

Route::post('/clear_favorites',[App\Http\Controllers\FavController::class, 'clearAllMethod']);

Route::post('/flightsSearch', [App\Http\Controllers\FlightsApiController::class, 'index']);





Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::get('/profile', [App\Http\Controllers\UpdateController::class, 'index'])->name('profile');

Auth::routes(['verify' => true]);

Route::get('/checkout', [App\Http\Controllers\CartItemsController::class, 'index'])->name('checkout');


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Route::post('/flights', [App\Http\Controllers\FlightsApiController::class, 'index'])->name('flights');
