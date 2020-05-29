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

        $ongoingMaintenance_start = $this->maintenances()->whereNotNull('started_on')->first();

        $ongoingMaintenance_end = $this->maintenances()->whereNull('ended_on')->first();




        //Fixing issue where a vehicle would show available while undergoing service in vehicle blade
        if ($unfinishedMaintenance) {
            return 'Out of service';
        }

        if ($ongoingMaintenance_start && $ongoingMaintenance_end) {
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
