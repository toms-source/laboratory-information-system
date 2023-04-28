<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite; //import this
use App\Models\User; //import this
use Illuminate\Support\Facades\Auth; //import this

class ProviderController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    //provider -> no specific -> ex. github, facebook, google, etc.
    public function callback($provider){
        $socialUser = Socialite::driver($provider)->user();
       // dd($socialUser); //if you run die dump, you'll see info from that provider

       $user = User::updateOrCreate([
        'provider_id' => $socialUser->id,
        'provider' => $provider
    ], [
        'name' => $socialUser->name,
        'username' => $socialUser->nickname,
        'email' => $socialUser->email,
        'provider_token' => $socialUser->token,
        //'provider_refresh_token' => $socialUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    return redirect('/client/dashboard');
    }
}
