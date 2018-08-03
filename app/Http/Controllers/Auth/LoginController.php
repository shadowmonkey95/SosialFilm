<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function handleProviderCallback()
    {
        $data = Socialite::driver('facebook')->stateless()->user();
//        return var_dump($data);
        $user = User::where('email', $data->email)->first();
//        return var_dump($user);

        if (!is_null($user)) {
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->facebook_id = $data->id;
            $user->save();
        } else {
            $user = User::where('facebook_id', $data->id)->first();
            if (is_null($user)) {
                // Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->email = $data->email;
                $user->facebook_id = $data->id;
                $user->save();
            } else {
                Auth::login($user);
            }
        }
        return redirect('/')->with('success', 'Successfully logged in!');
    }
}
