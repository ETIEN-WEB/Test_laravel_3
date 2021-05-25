<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use App\Notifications\ResetPasswordNotification; // At the top under your namespace





class User extends Authenticatable
{
    /*public function sendPasswordResetNotification($token)
    {
    $this->notify(new ResetPasswordNotification($token));
    }*/


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'phone2',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     * options : le champ en question 
     * AdminRole : class Casts
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        
    ];
}
