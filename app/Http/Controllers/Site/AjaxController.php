<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function more_category(){
        $count=Category::count();
        $categories=Category::orderBy('id', 'DESC')->take($count-7)->get();
        $html='';
        foreach ($categories as $category){
            $html=$html."<li class='main-nav-list'><a ><input  class='pixel-radio' style='border-radius: 0px!important;' type='checkbox' name='categoryList' value='".$category->id."'>".$category->name."<span class='number'>(".count($category->products).")</span></a></li>";
        }
        return response()->json($html);
    }
    public function more_brand(){
        $count=Brand::count();
        $brands=Brand::orderBy('id', 'DESC')->take($count-7)->get();
        $html='';
        foreach ($brands as $brand){
            $html=$html."<li class='filter-list'><input class='pixel-radio' type='radio' id='brand' value='".$brand->id."' name='brandList'><label for='apple'>".$brand->name."<span>(".count($brand->products).")</span></label></li>";
        }
        return response()->json($html);
    }
    public function search_post(){
        $sortType=Request('sortType');
        $showNumber=Request('showNumber');
        $categoryList=Request('categoryList');
        $brand=Request('brand');
        $color=Request('color');
        $tag=Request('tag');
        $minPrice=Request('minPrice');
        $maxPrice=Request('maxPrice');
        $products=Product::orderBy($sortType,'ASC')->get();
        $products=$products->whereBetween('price', array($minPrice, $maxPrice));
        if(!empty($categoryList)){
            $products=$products->whereIn('category_id',$categoryList);
        }
        if(!empty($brand)){
            $products=$products->where('brand_id','=',$brand);
        }
        if(!empty($color)) {
            $searchList = Product::select('id')->with('attributes')->whereHas('attributes', function ($query) use ($color) {
                $query->where('value', 'like', '%' . strtolower($color) . '%');
            })->get();
            $reslut=[];
            foreach ($searchList as $item){
                array_push($reslut,$item->id);
            }
            $products=$products->whereIn('id',$reslut);
        }
        if(!empty($tag)) {
            $searchList = Product::select('id')->with('tags')->whereHas('tags', function ($query) use ($tag) {
                $query->where('name', 'like', '%' .strtolower($tag)  . '%');
            })->get();
            $reslut=[];
            foreach ($searchList as $item){
                array_push($reslut,$item->id);
            }
            $products=$products->whereIn('id',$reslut);
        }
        $products=$products->take($showNumber);
        $html="";
        foreach ($products as $product){
            $html=$html."<div class='col-lg-4 col-md-6'>";
            $html=$html."<div class='single-product float-left'>";
            $html=$html."<img class='img-fluid' style='height: 191px!important;' src='".asset('')."images_upload/".$product->defaultImage()."' >";
            $html=$html."<div class='product-details'>";
            $html=$html."<h6>".show_title($product->name)."</h6>";
            $html=$html."<div class='price'><h6>$".$product->discount."</h6><h6 class='l-through'>$".$product->price."</h6></div>";
            $html=$html."<div class='price'>";
            foreach ($product->attributes as $attribute){
                $html=$html."<h6>".$attribute->value."</h6>";
            }
            $html=$html."</div>";
            $html=$html."<div class='prd-bottom'>";
            $html=$html."<form STYLE='display: inline' method='post' action='".route("add.card")."'>";
            $html=$html.csrf_field();
            $html=$html."<input name='id' type='hidden' value='".$product->id."'>";
            $html=$html."<input name='name' type='hidden' value='".$product->name."'>";
            $html=$html."<input name='price' type='hidden' value='".$product->price."'>";
            $html=$html."<input name='quantity' type='hidden' value='1'>";
            if(auth()->check()){
                $html=$html."<button  type='submit'  style='cursor: pointer;text-align: left;background-color: transparent!important;border-color: transparent!important;'  >";
                $html=$html." <a href='#'  class='social-info'><p class='hover-text'>add to bag</p><span class='ti-bag'></span></a></button>";
                $html=$html."</form>";
                $html=$html."<a style='cursor: pointer;'  onclick='wishlist(".$product->id.")'  class='social-info'>";
            }else{
                $html=$html."<button  onclick='showlogin()'  style='cursor: pointer;text-align: left;background-color: transparent!important;border-color: transparent!important;'  >";
                $html=$html." <a href='#'  class='social-info'><p class='hover-text'>add to bag</p><span class='ti-bag'></span></a></button>";
                $html=$html."</form>";
                $html=$html."<a style='cursor: pointer;'  onclick='showlogin()'  class='social-info'>";
            }
            if($product->checkLiked()){
                $html=$html."<span id='wishlist-".$product->id."' class='lnr lnr-heart liked'></span>";
            }
            else{
                $html=$html."<span id='wishlist-".$product->id."' class='lnr lnr-heart '></span>";
            }
            $html=$html."<p class='hover-text'>Wishlist</p></a>";
            $html=$html."<a style='cursor: pointer;' href='".url('single-product/'.$product->id)."' class='social-info'><span class='lnr lnr-eye'></span><p class='hover-text'>More Details</p></a>";
            $html=$html."<a style='cursor: pointer;' href='".route('search')."' class='social-info'><span class='lnr lnr-move'></span><p class='hover-text'>view more</p></a>";
            $html=$html."</div>";
            $html=$html."</div>";
            $html=$html."</div>";
            $html=$html."</div>";
        }
        return response()->json($html);
    }

}
