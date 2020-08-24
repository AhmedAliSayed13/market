<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_attribute extends Model
{
    protected $table = 'product_attributes';

    public function product()
    {
        return $this->belongsTo('App\Models\Product');

    }
    public function attribute()
    {
        return $this->belongsTo('App\Models\Attribute');

    }
}
