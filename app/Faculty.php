<?php

namespace App;
use App\Counseling;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Faculty extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Counseling(){
        return $this->hasMany('App\Counseling');
    }


}