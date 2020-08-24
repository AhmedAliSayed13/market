<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    public function Product()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
