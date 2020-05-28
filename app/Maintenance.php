<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    //Every field is fillable
    protected $guarded = [];
    protected $dates = ['started_on', 'ended_on'];
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
        # code...
    }

    public function status()
    {
        //Out of service
        //Repairing
        //Completed

        if ($this->started_on != null) {

            if ($this->ended_on != null) {
                return 'Completed';
            }

            return 'In progress';
        }
        return 'Scheduled';
    }
}
