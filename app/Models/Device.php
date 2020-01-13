<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['company', 'name', 'code', 'location', 'address'];


    public function detail()
    {
        return $this->hasOne(DetailDevice::class);
    }
}
