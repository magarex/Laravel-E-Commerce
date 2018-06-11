<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable = [
        'adressline', 'city', 'state', 'phone'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
