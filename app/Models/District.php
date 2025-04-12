<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $guarded = [];
    public function healthFacilities()
    {
        return $this->hasMany(HealthFacility::class, 'district_id');
    }
}
