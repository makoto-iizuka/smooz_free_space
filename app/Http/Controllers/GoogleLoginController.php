<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;

class GoogleLoginController extends Controller
{
    public function getGoogleAuth()
    {
        return Socialite::driver('google')
            ->redirect();
    }

    public function authGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::firstOrCreate([
            'email' => $googleUser->email
        ], [
            'email_verified_at' => now(),
            'google_id' => $googleUser->getId()
        ]);
        Auth::login($user, true);
        return redirect('/');
    }
    public function log(Request $request)
    {
        Log::emergency('ログサンプル', ['memo' => 'sample1']);
        Log::alert('ログサンプル', ['memo' => 'sample1']);
        Log::critical('ログサンプル', ['memo' => 'sample1']);
        Log::error('ログサンプル', ['memo' => 'sample1']);
        Log::warning('ログサンプル', ['memo' => 'sample1']);
        Log::notice('ログサンプル', ['memo' => 'sample1']);
        Log::info('ログサンプル', ['memo' => 'sample1']);
        Log::debug('ログサンプル', ['memo' => 'sample1']);

        return view('sample.log');
    }
}