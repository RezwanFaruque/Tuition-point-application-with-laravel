<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceDistrict extends Model
{
    public function area(){
        return $this->hasMany(ServiceArea::class,'district_id','id');
    }
}
