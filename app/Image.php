<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Casts\AdminRole;

class Image extends Model
{
    //
    protected $casts = [
       'filename' => AdminRole::class,
        //'filename' => 'array',
    ];
}
