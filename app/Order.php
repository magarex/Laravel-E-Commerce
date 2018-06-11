<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable= [
        'total'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orderItems(){
        return $this->belongsToMany(Product::class)->withPivot('qty');
    }
}
