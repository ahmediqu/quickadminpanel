<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'f_name','l_name','country','number','dob','gender','district','address','email','upozila','tnr','autoTnr','n_lan','s_lan','parent_number','code','nid','nid_number','user_type','password','point'
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

    public function isOnline(){
        return Cache::has('user-is-online-' . $this->id);
    }

    public function talkedTo()
    {
        return $this->hasMany('App\Chat','from');
    }

    public function relatedTo()
    {
        return $this->hasMany('App\Chat','to');
    }
}
