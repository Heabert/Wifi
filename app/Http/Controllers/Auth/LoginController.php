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
    public function handleProviderCallback(){
        $client = new \GuzzleHttp\Client();
        $user = Socialite::driver('twitter')->redirect();
       // $url = 'http://twitter.com/api/posts';
        //dd($user);

        $userData = [];

        $userData['fname'] = $user->name;
        $userData['email'] = $user->email;
        $userData['id'] = $user->id;
        $userData['locationid'] = '1200';
        $userData['provider'] = 'twitter';
        $userData['userid'] = '1';

        $response = $client->request('POST', 'https://spearwifi.com/api/getData',['data' => $userData]);

        print_r($response);

    }
//FACEBOOK
    public function redirectToProviderOne(){
        return Socialite::driver('facebook')->redirect();
    }
    public function handleProviderCallbackOne(){


        $client = new \GuzzleHttp\Client();
        $user = Socialite::driver('facebook')->stateless()->user();

        //$url = "http://facebook.com/api/posts";
       // dd($user);

        $userData = [];

        $userData['fname'] = $user->name;
        $userData['email'] = $user->email;
        $userData['id'] = $user->id;
        $userData['locationid'] = '1200';
        $userData['provider'] = 'facebook';
        $userData['userid'] = '1';


        $response = $client->request('POST', 'https://spearwifi.com/getData',['data' => $userData]);

      dd($response);

    }
//GOOGLE
    public function redirectToProviderTwo(){
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallbackTwo(){

        $client = new \GuzzleHttp\Client();
        $user = Socialite::driver('google')->stateless()->user();

        //$url = "http://google.com/api/posts";
        //dd($user);
        $userData = [];

        $userData['fname'] = $user->first_name;
        $userData['lname'] = $user->last_name;
        $userData['email'] = $user->email;
        $userData['id'] = $user->id;
        $userData['locationid'] = '1200';
        $userData['provider'] = 'google';
        $userData['userid'] = '1';

        $response = $client->request('POST', 'https://spearwifi.com/api/getData',['data' => $userData]);

        print_r($response);


    }
//LINKEDIN
    public function redirectToProviderThree(){
        return Socialite::driver('linkedin')->redirect();
    }
    public function handleProviderCallbackThree()
    {
        $client = new \GuzzleHttp\Client();
        $user = Socialite::driver('linkedin')->stateless()->user();

        //$url = 'http://linkin.com/api/posts';

        $userData = [];

        $userData['fname'] = $user->first_name;
        $userData['lname'] = $user->last_name;
        $userData['email'] = $user->email;
        $userData['id'] = $user->id;
        $userData['locationid'] = '1200';
        $userData['provider'] = 'linkedin';
        $userData['userid'] = '1';


        $response = $client->request('POST', 'https://spearwifi.com/api/getData',['data' => $userData]);

        print_r($response);
    }


public function username()
{
    return 'username';
}


}
