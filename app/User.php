<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Monolog\Handler\RavenHandlerTest;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_type',
        'email',
        'password',
        'verification_token',
        'verify',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function posts() {
        return $this->hasMany('App\Post', 'user_id', 'id');
    }

    public function comments() {
        return $this->hasMany('App\Comment', 'user_id', 'id');
    }

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'user'; //TODO Constants and variable are always declared below class declaration move these

    public function admin() {
        return $this->user_type === self::ADMIN_TYPE;
    }

    public function isVerifed() {
        return $this->verify == true;
    }


}
