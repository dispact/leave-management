<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
	function show() {
		return view('login');
	}

	function destroy(Request $request) {
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect('/');
	}

	function redirect() {
		return Socialite::driver('google')->scopes(['https://www.googleapis.com/auth/calendar'])->redirect();
	}

	function callback() {
		$socialUser = Socialite::driver('google')->user();
		$user = User::where('auth_id', $socialUser->id)->first();

		session(['Authorization' => 'Bearer '. $socialUser->token]);

		if ($user) {
			Auth::login($user);
			return redirect('/');
		} else {
			$newUser = User::create([
				'name' => $socialUser->name,
				'email' => $socialUser->email,
				'image' => $socialUser->avatar,
				'auth_id' => $socialUser->id,
				'approver_id' => Setting::get('defaultApprover')
			]);

			if(!$newUser->hasAnyRole(['supervisor', 'administrator']))
				$newUser->syncRoles(['user']);

			Auth::login($newUser);
			return redirect('/');
		}
	}
}
