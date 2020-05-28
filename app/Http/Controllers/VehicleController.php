<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicle;
use App\Http\Requests\UpdateVehicle;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['vehicles'] = Vehicle::all();
        return view('vehicles', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-vehicle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicle $request)
    {
        $vehicle = Vehicle::create($request->only('make', 'model', 'color', 'engine_number', 'location', 'year', 'mileage', 'next_service'));

        return redirect()->route("vehicles.show", ["vehicle" => $vehicle]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        $data['vehicle'] = $vehicle;
        return view('show-vehicle', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $data['vehicle'] = $vehicle;
        return view('update-vehicle', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicle $request, Vehicle $vehicle)
    {
        //Update the requested fields
        $vehicle->update($request->only('make', 'model', 'color', 'engine_number', 'location', 'year', 'mileage', 'next_service'));
        //Show the newly edited vehicles
        return redirect()->route("vehicles.show", ["vehicle" => $vehicle]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public static function delete(Vehicle $vehicle)
    {
        $data['vehicle'] = $vehicle;
        return view('confirm-vehicle', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete($vehicle);
        return redirect()->route("vehicles.index", ["vehicle" => $vehicle]);
    }
}
