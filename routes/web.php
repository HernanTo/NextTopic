<?php

use App\Http\Controllers\Auth\VerificationController;
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

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/continue/register', [VerificationController::class, 'continueRegister'])->name('registerCon')->middleware('verified');
Route::post('/continue/register', [VerificationController::class, 'createAccount'])->name('createAccount')->middleware('verified');


// Login Google
    Route::get('/login-google', function () {
        return Socialite::driver('google')->redirect();
    })->middleware('guest')->name('login.google');

    Route::get('/google-callback', function () {
        $user = Socialite::driver('google')->user();
        $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
        if($userExists){
            Auth::login($userExists);
        }else{
            $userRegister = User::where('email', $user->email)->get()->first();
            if($userRegister){
                $userRegister->update([
                    'external_id' => $user->id,
                    'external_auth' => 'google',
                ]);
                Auth::login($userRegister);
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
        }

        return redirect('dashboard');
    });
// Login Google
