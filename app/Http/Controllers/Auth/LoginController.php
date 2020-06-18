<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;
use Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect(); // Redirects to twitter login
    }

    // After finishing from twitter login, it comes back to the website.
    public function handleProviderCallback()
    {
        $socialUser = Socialite::driver('twitter')->user();

        // dd($socialUser);
        $DBUser = User::where('provider_id', $socialUser->id)->where('provider', 'twitter')->first();

        if ($DBUser) {
            Auth::login($DBUser, true);
            return redirect('/home');
        }

        // Check if a user exists with same email, then update user...
        $EmailUserCheck = User::where('email', $socialUser->email)->first(); 
        if ($EmailUserCheck) {
            $EmailUserCheck->provider = 'twitter'; 
            $EmailUserCheck->provider_id = $socialUser->id;
            $EmailUserCheck->save();
            Auth::login($EmailUserCheck);
            return redirect('/home');
        }

        $newDBuser = new User; 
        $newDBuser->name = $socialUser->name; 
        $newDBuser->provider = 'twitter';
        $newDBuser->provider_id = $socialUser->id; 
        $newDBuser->save();

        Auth::login($newDBuser);
        return redirect('/home');
    }
}
