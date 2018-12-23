<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    //
    protected $fillable = ['email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function profileType(){
        return $this->hasOne(ProfileType::Class);
    }
}
