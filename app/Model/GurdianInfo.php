<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class GurdianInfo extends Model
{
    public function getgurdian(){

        return $this->belongsTo(User::class,'user_id','id');
    }
}
