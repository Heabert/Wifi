<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use http\Url;
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
//TWITTER
    public function redirectToProvider(){
        return Socialite::driver('twitter')->redirect();

    }
    public function handelProviderCallback(){
        $user = Socialite::driver('twitter')->stateless()->user();
        $url = "http://twitter.com/api/posts";
            dd($user);
        $client = new \GuzzleHttp\Client();

        $user = Socialite::driver('twitter')->stateless()->user();

        $url = 'http://twitter.com/api/posts';

        $userData = [];

        $userData['fname'] = $user->first_name;
        $userData['lname'] = $user->last_name;
        $userData['email'] = $user->email;

        print_r(array_values($userData));

    }
//FACEBOOK
    public function redirectToProviderOne(){
        return Socialite::driver('facebook')->redirect();
    }
    public function handelProviderCallbackOne(){

        $user = Socialite::driver('facebook')->stateless()->user();
        $url = "http://facebook.com/api/posts";

        $client = new \GuzzleHttp\Client();

        $user = Socialite::driver('facebook')->stateless()->user();

        $url = 'http://facebook.com/api/posts';

        $userData = [];

        $userData['fname'] = $user->first_name;
        $userData['lname'] = $user->last_name;
        $userData['email'] = $user->email;

        print_r(array_values($userData));

    }
//GOOGLE
    public function redirectToProviderTwo(){
        return Socialite::driver('google')->redirect();
    }
    public function handelProviderCallbackTwo(){
        $user = Socialite::driver('google')->stateless()->user();
        $url = "http://google.com/api/posts";

        $client = new \GuzzleHttp\Client();

        $user = Socialite::driver('google')->stateless()->user();

        $url = 'http://google.com/api/posts';

        $userData = [];

        $userData['fname'] = $user->first_name;
        $userData['lname'] = $user->last_name;
        $userData['email'] = $user->email;

        print_r(array_values($userData));


    }
//LINKEDIN
    public function redirectToProviderThree(){
        return Socialite::driver('linkedin')->redirect();
    }
    public function handelProviderCallbackThree()

    {
        $client = new \GuzzleHttp\Client();

        $user = Socialite::driver('linkedin')->stateless()->user();

        $url = 'http://linkin.com/api/posts';

        $userData = [];

        $userData['fname'] = $user->first_name;
        $userData['lname'] = $user->last_name;
        $userData['email'] = $user->email;

        print_r(array_values($userData));


        //$request = $client->post($url, ['body' => $userData]);

       // $response = $request->send();

        //dd($response);
    }


public function username()
{
    return 'username';
}


}
