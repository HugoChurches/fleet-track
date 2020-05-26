<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    protected $fillable = [
        'address', 'phone', 'license_number', 'license_expires_on', 'certifications'
    ];

    //Declaration of relationships between models, here we are declaring a user relationship
    public function user()
    {
        return $this->hasOne(User::class);
    }

    //Declaration of relationships between models, here we are declaring a trips relationship
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
