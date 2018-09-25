<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //
    protected $table = 'prices';
    
    public $primaryKey = 'id';

    public $timeStamps = true;

    public function product(){
        return $this->belongsTo('App/Product');
    }
}
