<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function images()
    {
        return $this->hasMany('App\Models\Productimage');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag','proudcttags');
    }
    public function defaultImage()
    {
        if(!isset($this->images[0]->image)){
            return "product.png";
        }
        return $this->images[0]->image;
    }
    public function available()
    {
        if($this->available){
            return "True";
        }
        return 'False';
    }
    public function checkLiked()
    {
        $item=Wishlist::where('user_id','=',auth()->user()->id)->where('product_id','=',$this->id)->first();
        if(empty($item)){
            return false;
        }
        return true;
    }
}
