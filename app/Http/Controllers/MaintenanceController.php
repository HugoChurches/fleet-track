<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaintenance;
use App\Maintenance;
use Illuminate\Http\Request;
use App\Vehicle;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['maintenances'] = Maintenance::all();
        return view('maintenances', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['vehicles'] = Vehicle::all();
        return view('create-maintenance', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaintenance $request)
    {
        $maintenance = Maintenance::create($request->only('vehicle_id', 'notes'));
        $data['maintenances'] = Maintenance::all();
        return redirect()->route('maintenances.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        $data['maintenance'] = $maintenance;
        return view('show-maintenance', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenance $maintenance)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function start(Maintenance $maintenance)
    {
        //
        $maintenance->started_on = now();
        $maintenance->save();
        return redirect()->route("maintenances.index");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function end(Maintenance $maintenance)
    {
        $maintenance->ended_on = now();
        $maintenance->save();
        return redirect()->route("maintenances.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function delete(Maintenance $maintenance)
    {
        //
        $data['maintenance'] = $maintenance;
        return view('confirm-maintenance', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $maintenance)
    {
        //
        $maintenance->delete($maintenance);
        return redirect()->route("maintenances.index", ["maintenance" => $maintenance]);
    }
}
