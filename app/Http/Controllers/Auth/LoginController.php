<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider(){
        return Socialite::driver('twitter')->stateless->redirect();
    }

    public function handelProviderCallback(){
        $user = Socialite::driver('twitter')->stateless->user();
    }

    public function redirectToProviderOne(){
        return Socialite::driver('facebook')->stateless->redirect();
    }

    public function handelProviderCallbackOne(){
        $user = Socialite::driver('facebook')->stateless->user();
    }

    public function redirectToProviderTwo(){
        return Socialite::driver('google')->stateless->redirect();
    }

    public function handelProviderCallbackTwo(){
        $user = Socialite::driver('google')->stateless->user();
    }

    public function redirectToProviderThree(){
        return Socialite::driver('linkedin')->stateless->redirect();
    }

    public function handelProviderCallbackThree(){
        $user = Socialite::driver('linkedin')->stateless->user();
    }

public function username()
{
    return 'username';
}


}
