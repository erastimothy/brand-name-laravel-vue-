<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ConfirmPayment extends Model
{
    protected $fillable = ['user_id','order_id','image','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
