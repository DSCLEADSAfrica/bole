<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'reviews';
    
    public $primaryKey = 'id';

    public $timeStamps = true;

    public function product (){
        return $this->belongsTo('App/Product');
    }
}
