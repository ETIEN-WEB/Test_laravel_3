<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_description extends Model
{
    //
    protected $fillable = [
        'nom_description',
        'espace_description',
        'categorie_id',
    ];

    /*protected $attributes = [
        'nom_description' => 'ok déja bon',
    ]; */
}
