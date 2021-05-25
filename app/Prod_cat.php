<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prod_cat extends Model
{
    //
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
