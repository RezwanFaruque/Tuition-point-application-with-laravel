<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceArea extends Model
{
    
    public function district(){
        return $this->belongsTo(ServiceDistrict::class,'district_id','id');
    }
}
