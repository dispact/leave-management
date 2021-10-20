<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::middleware(['auth'])->group(function() {
    Route::get('/', function() {
        return view('home');
    });
});
 

Route::get('login', function() {
    return view('login');
})->name('login');

Route::post('logout', function(\Illuminate\Http\Request $request) {
    \Illuminate\Support\Facades\Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->scopes(['https://www.googleapis.com/auth/calendar'])->redirect();
})->name('auth.google');

Route::get('/auth/callback', function () {
    $socialUser = Socialite::driver('google')->user();
    $user = \App\Models\User::where('auth_id', $socialUser->id)->first();

    if ($user) {
        \Illuminate\Support\Facades\Auth::login($user);
        return redirect('/');
    } else {
        $newUser = \App\Models\User::create([
            'name' => $socialUser->name,
            'email' => $socialUser->email,
            'image' => $socialUser->avatar,
            'auth_id' => $socialUser->id
        ]);

        \Illuminate\Support\Facades\Auth::login($newUser);
        return redirect('/');
    }
});