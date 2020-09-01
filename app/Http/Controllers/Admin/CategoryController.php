<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategorysDataTable;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index(CategorysDataTable $category)
    {
        return $category->render('admin.categorys.index',['title'=>'admin title']);
    }

    public function create()
    {
        $categories = Category::where('parent_id', null)->get();
        return view('admin.categorys.create-Category',compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>['required','string'],
            'slug'=>['required','string','unique:categories'],
            'image' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg'],
            'parent_id' => ['nullable'],
            'about'=>['required'],
        ]);
        $category=new Category();
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->about=$request->about;
        $category->parent_id=$request->parent_id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images_profile'), $imageName);
            $category->image = $imageName;
        }
        $category->save();
        return Redirect::back()->with('success', 'Created Account Category Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id){
        $category=Category::find($id);
        $categories=Category::all();
        return view('admin.categorys.edit-Category',compact('category','categories'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=>['required','string'],
            'image' => ['nullable','mimes:jpeg,png,jpg,gif,svg'],
            'slug'=>['required','unique:categories,slug,'.$id],
            'parent_id' => ['nullable'],
            'about'=>['required'],

        ]);
        $category=Category::find($id);
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->parent_id=$request->parent_id;
        $category->about=$request->about;
        if ($request->hasFile('image')){
            $old_image_name = $category->image;
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images_profile'), $imageName);
            $category->image = $imageName;
            if($old_image_name!='category.png'){
                @unlink('images_profile/' . $old_image_name);
            }
        }
        $category->save();
        return Redirect::back()->with('success', 'Updated Category Successfully');

    }

    public function destroy($id)
    {
        $category=Category::Find($id);
        $imageName=$category->image ;

        $category->delete();
        if($imageName!='category.png'){
            @unlink('images_profile/' . $imageName);
        }
        return Redirect::back()->with('success', 'Deleted Account Successfully');
    }

}
