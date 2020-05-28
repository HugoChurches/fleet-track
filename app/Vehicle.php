<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    //Maintenance relationship
    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }

    //Review these concepts...
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    //Function to get vehicle status
    public function status()
    {
        $unfinishedMaintenance = $this->maintenances()->whereNull('started_on')->first();

        if ($unfinishedMaintenance) {
            return 'Out of service';
        }

        //Started must not be nullable if vehicle is in use

        //If ended on is still null then the vehicle is not available
        $unfinishedTrip = $this->trips()->whereNotNull('started_on')->whereNull('ended_on')->first();

        if ($unfinishedTrip) {
            return 'In use';
        }

        return 'Available';
    }
}
