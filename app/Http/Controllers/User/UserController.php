<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function dashboard(){

        return view('user.dashboard');
    }
    public function change_password(){

        return view('user.change-password');
    }
    public function save_change_password(Request $request){
        $validatedData = $request->validate([
            'oldPassword' => ['required','string', 'min:8'],
            'newPassword' => ['required','string','min:8'],
            'confirmPassword' => ['required','string','same:newPassword','min:8','different:oldPassword'],
        ]);
        $new_pass= Hash::make($request->newPassword);

        if (Hash::check($request->oldPassword, auth()->user()->password) == false)
        {
            $error=" Old Password Not Correct ";
            return redirect()->back()->with('error', $error);
        }
        $user = auth()->user();
        $user->password = Hash::make($request->newPassword);
        $user->save();

        $message="Updated Password successfully";
        return redirect()->back()->with('success', $message);


    }
    public function logout() {

        Auth::logout();
        return Redirect::route('home');

    }
}
