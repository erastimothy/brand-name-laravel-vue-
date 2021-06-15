<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    protected $fillable = ['product_id','user_id','quantity','variance','subtotal'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
