<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
// class User extends Authenticatable
{
    public $table="users";
    //////////////
    public function files()
    {
        return $this->hasMany('App\File');
    }
    //////////////
    public function details()
    {
        return $this->hasMany('App\Detail');
    }
    //////////////
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName','LastName','email','Number','CNE','CNI','Feliere','Gender', 'password','usertype'
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
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
