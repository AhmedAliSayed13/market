<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SettingController extends Controller
{
    public function ShowSetting(){
        return view("admin.setting.SiteSetting");
    }
    public function EditSetting(Request $request){
        $validatedData = $request->validate([
            'name'=>['required','string'],
            'phone'=>['required','string'],
            'email'=>['required','string'],
            'facebook'=>['nullable','string'],
            'logo' => ['nullable','mimes:jpeg,png,jpg,gif,svg'],
            'icon' => ['nullable','mimes:jpeg,png,jpg,gif,svg'],
            'twitter'=>['nullable','string'],
            'instgram'=>['nullable','string'],
            'about'=>['required'],
        ]);
        $site=Setting::find(1);
        $site->name=$request->name;
        $site->phone=$request->phone;
        $site->email=$request->email;
        $site->facebook=$request->facebook;
        $site->twitter=$request->twitter;
        $site->instgram=$request->instgram;
        $site->about=$request->name;
        if ($request->hasFile('logo')){
            $old_image_name = $site->image;
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images_profile'), $imageName);
            $site->image = $imageName;
            if($old_image_name!='logo.png'){
                @unlink('images_profile/' . $old_image_name);
            }
        }
        if ($request->hasFile('icon')){
            $old_image_name = $site->image;
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images_profile'), $imageName);
            $site->image = $imageName;
            if($old_image_name!='icon.png'){
                @unlink('images_profile/' . $old_image_name);
            }
        }
        return Redirect::back()->with('success', 'Updated Setting Brand Successfully');
    }
}
