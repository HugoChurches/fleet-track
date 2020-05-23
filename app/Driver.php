<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    protected $fillable = [
        'address', 'phone', 'license_number', 'license_expires_on', 'certifications'
    ];
}
