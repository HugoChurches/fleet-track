<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $dates = ['started_on', 'ended_on'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function status()
    {
        //Pending authorization
        //Schedule
        //In progress
        //Completed

        if ($this->user_id == null) {
            return 'Pending authorization';
        }


        if ($this->started_on != null) {
            if ($this->ended_on != null) {
                return 'Completed';
            }
            return 'In progress';
        }
        return 'Scheduled';
    }

    public function totalCost()
    {
        //Calculate final payout
        $duration_hours = $this->duration_hours ? $this->duration_hours : 0;
        $pay_rate = $this->pay_rate ? $this->pay_rate : 0;
        $pocket_expenses = $this->pocket_expenses ? $this->pocket_expenses : 0;
        $bonus = $this->bonus ? $this->bonus : 0;
        $late_fee = $this->late_fee ? $this->late_fee : 0;
        //And return it
        return ($duration_hours * $pay_rate) + $pocket_expenses + $bonus - $late_fee;
    }
}
