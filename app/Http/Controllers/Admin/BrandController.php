<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;

use App\DataTables\BrandsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
//use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(BrandsDataTable $brand)
    {
        return $brand->render('admin.brands.index',['title'=>'admin title']);
    }

    public function create()
    {
        return view('admin.brands.create-Brand');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>['required','string','unique:brands'],
            'image' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg'],
            'about'=>['required'],
        ]);
        $brand=new Brand();
        $brand->name=$request->name;
        $brand->about=$request->about;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images_profile'), $imageName);
            $brand->image = $imageName;
        }
        $brand->save();
        return Redirect::back()->with('success', 'Created Account Brand Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id){
        $brand=Brand::find($id);
        return view('admin.brands.edit-Brand',compact('brand'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=>['required','string','unique:brands,name,'.$id],
            'image' => ['nullable','mimes:jpeg,png,jpg,gif,svg'],
            'about'=>['required'],

        ]);
        $brand=Brand::find($id);
        $brand->name=$request->name;
        $brand->about=$request->about;
        if ($request->hasFile('image')){
            $old_image_name = $brand->image;
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images_profile'), $imageName);
            $brand->image = $imageName;
            if($old_image_name!='brand.png'){
                @unlink('images_profile/' . $old_image_name);
            }
        }
        $brand->save();
        return Redirect::back()->with('success', 'Updated Brand Successfully');

    }

    public function destroy($id)
    {
        $brand=Brand::Find($id);
        $imageName=$brand->image ;

        $brand->delete();
        if($imageName!='brand.png'){
            @unlink('images_profile/' . $imageName);
        }
        return Redirect::back()->with('success', 'Deleted Account Successfully');
    }

}
