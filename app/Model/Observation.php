<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    Public function product(){
        return $this-> belongsTo('App\Model\Product');
    }
}
