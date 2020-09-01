<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;


use str;

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
    protected $redirectTo = 'user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        $remember_me = $request->has('remember') ? true : false;
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember_me)) {
            return redirect()->intended('user/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'))
            ->withErrors(['password'=>'Your account is not found']);
    }
    public function github()
    {
        return Socialite::driver('github')->redirect();
    }
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function githubRedirect()
    {
        $user = Socialite::driver('github')->user();
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return Redirect::to('user/dashboard');
    }
    public function googleRedirect()
    {
        $user = Socialite::driver('google')->user();
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return Redirect::to('user/dashboard');
    }
    public function facebookRedirect()
    {
        $user = Socialite::driver('facebook')->user();
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return Redirect::to('user/dashboard');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $githubUser
     * @return User
     */
    private function findOrCreateUser($githubUser)
    {
        if ($authUser = User::where('email', $githubUser->email)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => Hash::make('123456789'),
        ]);
    }
}
