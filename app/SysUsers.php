<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SysUsers extends Authenticatable
{

  protected $table = 'sys_users';
  protected $remember_token = 'api_token';

  protected $fillable = [
      'username', 'password',
  ];

  protected $hidden = [
      'password', 'api_token',
  ];

  public function setPasswordAttribute($password){
    $this->attributes['password'] = md5($password);
  }
}
