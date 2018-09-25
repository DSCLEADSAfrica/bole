<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $table = 'products';
    
    public $primaryKey = 'id';

    public $timeStamps = true;

    public function seller (){
        return $this->belongsTo('/App/Seller');
    }

    public function reviews(){
        return $this->hasMany('App/Review');
    }

    public function prices(){
        return $this->hasMany('App/Price');
    }
}
