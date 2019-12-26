<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


//use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    public $timestamps=false;
    protected $guarded=[];
   /*  protected $fillable = [
    'rut', 'clave',
    ]; */
     protected $hidden = [
         'password','remember_token',
    ];  
}
