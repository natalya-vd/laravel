<?php

namespace App\Http\Controllers;

use App\Services\Contracts\Social;
use Laravel\Socialite\Facades\Socialite;

class SocialProviderController extends Controller
{
    public function redirect(string $driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function callback(string $driver, Social $social)
    {
        $user = Socialite::driver($driver)->user();
        return redirect($social->loginAndGetRedirectUrl($user));
    }
}
