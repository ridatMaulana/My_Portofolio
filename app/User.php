<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $primaryKey = 'id_user';
    protected $table = 't_user';
    protected $fillable = [
        'nama_user', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
