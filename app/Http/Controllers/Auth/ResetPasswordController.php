<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        $this->middleware('guest');
    }
    public function showResetForm($token){
        $check_token=DB::table('password_resets')->where('token','=',$token)->where('created_at','>',Carbon::now('Africa/Cairo')->subHour(2))->first();
        if(!empty($check_token)){
            return view('auth.passwords.reset_password',['email'=>$check_token->email]);
        }
        return redirect(admin_url('password/reset'))->with('error','Token not Valid !! ');

    }
    public function reset(Request $request){
        $validatedData = $request->validate([
            'new_password' => ['required','string', 'min:8'],
            'confirm_password' => ['required','string','same:new_password','min:8'],
        ]);
        $check_token=DB::table('password_resets')->where('email','=',$request->email)->where('created_at','>',Carbon::now('Africa/Cairo')->subHour(2))->first();
        if(!empty($check_token)){
            $user=User::where('email',$check_token->email)->first();
            $user->password=Hash::make($request->new_password);
            $user->save();
            return redirect(route('login'))->with('success','Password Updated');

        }
        return redirect(route('login'))->with('error','Token not Valid !! ');

 }
}
