<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailDevice extends Model
{
    protected $guarded = ['id'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function getIsSameRanAttribute($value)
    {
        return $value == 0 ? false : true;
    }

    public function getHasBypassRouteAttribute($value)
    {
        return $value == 0 ? false : true;
    }
}
