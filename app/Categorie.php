<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $fillable = [

        'nom_categorie', 
        'espace_categorie', 
        'creationdate',

    ]; 

    public function cat_descriptions()
    {
        return $this->hasMany('App\Cat_description');
    }

    protected $dates = [
        'creationdate',
    ];

}
