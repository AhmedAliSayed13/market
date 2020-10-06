<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'order_product');
    }
    public function order_products()
    {
        return $this->hasMany(Order_product::class);
    }
    public function voucher()
    {
        return $this->belongsTo(Voucher::class,'shipping_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
