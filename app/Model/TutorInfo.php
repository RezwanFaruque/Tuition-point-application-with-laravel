<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class TutorInfo extends Model
{
    public function getuser(){
        return $this->belongsTo(User::class);
    }
}
