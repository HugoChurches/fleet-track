<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\StoreTrip;
use App\Http\Requests\UpdateTrip;
use App\Http\Requests\UpdateVehicle;
use App\Trip;
use App\Vehicle;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['trips'] = Trip::all();
        return view('trips', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illu`minate\Http\Response
     */
    public function create()
    {
        $data['vehicles'] = Vehicle::all();
        //Send the vehicles
        return view('create-trip', $data);
    }

    /**
     * Store a newly created `resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrip $request)
    {
        $trip = new Trip($request->only('destination', 'duration_hours', 'due_date', 'vehicle_id'));
        Auth::user()->driver->trips()->save($trip);
        //return 'created new trip';
        $data['trip'] = $trip;
        return view('show-trip', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
        $data['trip'] = $trip;
        return view('show-trip', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        $data['trip'] = $trip;
        $data2['vehicles'] = Vehicle::all();
        return view('update-trip', $data, $data2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrip $request, Trip $trip)
    {
        $trip->update($request->only('duration_hours', 'destination', 'due_date', 'trip_notes', 'pocket_expenses', 'late_fee', 'bonus', 'pay_rate'));
        return redirect()->route("trips.show", ["trip" => $trip]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function start(Trip $trip)
    {
        $trip->started_on = now();
        $trip->save();
        return redirect()->route("trips.show", ["trip" => $trip]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function authorizeTrip(Trip $trip)
    {
        $trip->user_id = Auth::user()->id;
        $trip->save();
        return redirect()->route("trips.show", ["trip" => $trip]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function end(Trip $trip)
    {
        $trip->ended_on = now();
        $trip->save();
        return redirect()->route("trips.show", ["trip" => $trip]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return redirect()->route('trips.index');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function showNotes(Trip $trip)
    {
        $data['trip'] = $trip;
        return view('update-note', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function addNotes(UpdateTrip $request, Trip $trip)
    {
        $trip->update($request->only('duration_hours', 'destination', 'due_date', 'trip_notes', 'pocket_expenses', 'late_fee', 'bonus', 'pay_rate'));
        return redirect()->route("trips.show", ["trip" => $trip]);
    }
}
