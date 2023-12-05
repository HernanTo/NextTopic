<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->middleware('guest');

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
    if($userExists){
        Auth::login($userExists);
    }else{
        $userNew = User::create([
            'external_id' => $user->id,
            'external_auth' => 'google',
            'name' => $user->name,
            'avatar' => $user->avatar,
            'email' => $user->email,
            'email_verified_at' => date('Y-m-d H:i:s'),
            'is_active' => 1,
        ]);
        Auth::login($userNew);
    }

    return redirect('dashboard');
});
