<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Actuallymab\LaravelComment\Contracts\Commentable;
use Actuallymab\LaravelComment\HasComments;
use BeyondCode\Vouchers\Traits\HasVouchers;

class Product  extends Model implements Commentable
{
    use HasComments,HasVouchers;
    public function canBeRated(): bool
    {
        return true; // default false
    }
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

    public function attributes()
    {
        return $this->hasMany('App\Models\Product_attribute');

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
        if (auth()->check())
        {
                $item = Wishlist::where('user_id', '=', auth()->user()->id)->where('product_id', '=', $this->id)->first();
            if (empty($item)) {
                return false;
            }
            return true;
        }
    }
    public function vouchers()
    {
        return $this->hasMany('App\Models\Voucher');
    }
    public function order_products()
    {
        return $this->hasMany(Order_product::class);
    }
}
