<?php

namespace App;

use App\Model\TutorInfo;
use App\Model\GurdianInfo;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function tutorinfo(){
        return $this->hasOne(TutorInfo::class,'user_id','id');
    }


    public function gurdianinfo(){
        return $this->hasOne(GurdianInfo::class,'user_id','id');
    }
}
