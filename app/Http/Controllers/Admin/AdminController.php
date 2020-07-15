<?php

namespace App\Http\Controllers\Admin;

use App\Mail\AdminResetPassword;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{


    public function dashboard(){
        $products=Product::all()->count();
        $categories=Category::all()->count();
        $tags=Tag::all()->count();
        $brands=Brand::all()->count();
        return view('admin.pages.dashboard',compact('products','categories','tags','brands'));
    }

    public function EditAdmin (Request $request){
        $request->validate([
            'name'      =>  ['required', 'string'],
            'email' =>  ['required', 'string', 'email', 'unique:admins,email,'.Request('id').'id'],
            'nid'     =>  ['required', 'string', 'unique:admins,nid,'.Request('id').'id'],
            'address'     =>  ['required', 'string'],
            'phone'     =>  ['required', 'string'],
            'age'     =>  ['required', 'string'],
            'about'     =>  ['required'],

        ]);
        $admin=Admin::find($request->id);
        if(empty($admin) ){
            return redirect()->back()->with(['error',' Admin Not Found !!!!']);
        }
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->nid=$request->nid;
        $admin->address=$request->address;
        $admin->phone=$request->phone;
        $admin->age=$request->age;
        $admin->about=$request->about;
        $admin->save();
        return redirect()->back()->with('success',' Edit Profiles Successfully');
    }

    public function ChangePassword(Request $request)
    {
        $validatedData = $request->validate([
            'password' => ['required','string', 'min:8'],
            'new_password' => ['required','string','same:password_confirm','min:8','different:password'],
        ]);
        $new_pass= Hash::make($request->new_password);
        if (Hash::check($request->password, Auth::guard('admin')->user()->password) == false)
        {
            $error=" Old Password Not Correct ";
            return redirect()->back()->with('error', $error);
        }
        $admin = auth()->user();
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        $message="Updated Password successfully";
        return redirect()->back()->with('success', $message);

    }
    public function showLinkRequestForm()
    {
        return view('admin.auth.email');

    }
    public function sendResetLinkEmail(Request $request)
    {
        $admin=Admin::Where('email','=',$request->email)->first();
        if(!empty($admin)){
            $token=app('auth.password.broker')->createToken($admin);
            $data=DB::table('password_resets')->insert([
                'email'=>$admin->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),
            ]);
            Mail::to($admin->email)->send(new AdminResetPassword(['data'=>$admin,'token'=>$token]));
            return back()->with('success','Reset Link is Send  Plase Check Email');
        }
        return back()->with('error','Email Not Found !! ');

    }
    public function showResetForm($token){
        $check_token=DB::table('password_resets')->where('created_at','>',Carbon::now('Africa/Cairo')->subHour(2))->first();
        if(!empty($check_token)){
            return view('admin.auth.reset_password',['email'=>$check_token->email]);
        }
        return redirect(admin_url('password/reset'))->with('error','Token not Valid !! ');
    }
    public function reset_password(Request $request){
        $validatedData = $request->validate([
            'new_password' => ['required','string', 'min:8'],
            'confirm_password' => ['required','string','same:new_password','min:8'],
        ]);
        $check_token=DB::table('password_resets')->where('created_at','>',Carbon::now('Africa/Cairo')->subHour(2))->first();
        if(!empty($check_token)){
           $admin=Admin::where('email',$check_token->email)->first();
            $admin->password=Hash::make($request->new_password);
            $admin->save();
            return redirect(route('admin.login'))->with('success','Password Updated');

        }
        return redirect(admin_url('admin.login'))->with('error','Token not Valid !! ');
    }

}
