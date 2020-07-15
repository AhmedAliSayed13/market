<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

use App\Mail\UserResetPassword;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');

    }
    public function sendResetLinkEmail(Request $request)
    {
        $user=User::Where('email','=',$request->email)->first();

        if(!empty($user)){
            $token=app('auth.password.broker')->createToken($user);
            $data=DB::table('password_resets')->insert([
                'email'=>$user->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),
            ]);
            Mail::to($user->email)->send(new UserResetPassword(['data'=>$user,'token'=>$token]));
            return back()->with('success','Reset Link is Send  Plase Check Email');
        }
        return back()->with('error','Email Not Found !! ');

    }

}
