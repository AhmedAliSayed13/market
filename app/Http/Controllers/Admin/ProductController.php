<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

use App\Models\Productimage;
use App\Models\Proudcttag;
use App\Models\Tag;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(ProductsDataTable $product)
    {
        return $product->render('admin.products.index',['title'=>'admin title']);
    }

    public function create()
    {
        $brands=Brand::all();
        $categories=Category::all();
        return view('admin.products.create-Product',compact('brands','categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>['required'],
            'price'=>['required','integer'],
            'amount'=>['required','integer'],
            'brand_id'=>['required','integer'],
            'category_id'=>['required','integer'],
            'describe'=>['required'],
            'tags'=>['required'],
        ]);

        $product=new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->amount=$request->amount;
        $product->brand_id=$request->brand_id;
        $product->category_id=$request->category_id;
        $product->describe=$request->describe;
        $product->save();
        //add tags name
        foreach(explode(',',$request->tags) as $word){
            $tag=Tag::where('name','=',$word)->first();
            if(empty($tag)){
               $newTag=new Tag();
                $newTag->name=$word;
                $newTag->save();
            }
            $tag=Tag::where('name','=',$word)->first();
            $producttage= new Proudcttag();
            $producttage->product_id=$product->id;
            $producttage->tag_id=$tag->id;
            $producttage->save();
        }
        return Redirect::back()->with(['success'=>'Created Account Product Successfully','id' => $product->id]);
    }
    function upload_image(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images_upload'), $imageName);
        $product_image= new Productimage();
        $product_image->image=$imageName;
        $product_image->product_id=$request->id;
        $product_image->save();
        return Redirect::back()->with('success', 'Updated Product Images Successfully');
    }
    function delete_image(Request $request)
    {
        if($request->get('id'))
        {
            $productimage=Productimage::find($request->id);

            if($productimage->image!='product.png'){
                @unlink('images_upload/' . $productimage->image);
            }
            $productimage->delete();


        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id){
        $product=Product::find($id);
        $brands=Brand::all();
        $categories=Category::all();
        $images=$product->images;

        $tags='';
        foreach ($product->tags as $value){
            $tags=$tags.$value->name.',';
        }

        return view('admin.products.edit-Product',compact('product','brands','categories','tags','images'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=>['required'],
            'price'=>['required','integer'],
            'amount'=>['required','integer'],
            'brand_id'=>['required','integer'],
            'category_id'=>['required','integer'],
            'describe'=>['required'],
        ]);
        $product=Product::find($id);
        if(empty($product)){
            return Redirect::back()->with('error', 'Product  not found!!!');
        }
        $product->name=$request->name;
        $product->price=$request->price;
        $product->amount=$request->amount;
        $product->brand_id=$request->brand_id;
        $product->category_id=$request->category_id;
        $product->describe=$request->describe;
        $product->save();
        return Redirect::back()->with('success', 'Updated Product Successfully');
    }
    public function destroy($id)
    {
        $product=Product::Find($id);
        $product->delete();
        return Redirect::back()->with('success', 'Deleted Product Successfully');
    }
    public function addCart(Request $request)
    {
        $product =Product::find($request->input('id'));
        if(empty($product)) {
            return redirect()->back()->with('error', 'Item Not Found');
        }
        $options = $request->except('_token', 'id', 'price', 'quantity');

        Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('quantity'), $options);

        return redirect()->back()->with('message', 'Item added to cart successfully.');
    }

}

