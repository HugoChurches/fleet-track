<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdministrator;
use App\Http\Requests\UpdateAdministrator;
use App\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Create controller using php artisan make:controller AdministratorController --resource (for CRUD endpoints)
        //return view('admins');
        //Fetch data from server with all user accounts
        $data['admins'] = User::all();
        return view('admins', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create controller for admin creation
        return view('create-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministrator $request)
    {
        //return 'ok';\
        $administrator = new User($request->only('name', 'email'));
        $administrator->password = bcrypt($request->input('password'));
        $administrator->save();
        //After saving everything reroute to the newly added administrator
        return redirect()->route("administrators.show", ["administrator" => $administrator]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $administrator)
    {
        $data['administrator'] = $administrator;
        return view('show-admin', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $administrator)
    {
        $data['administrator'] = $administrator;
        return view('update-admin', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministrator $request, User $administrator)
    {
        //Update the requested fields
        $administrator->update($request->only('name', 'email', 'password'));
        //Show the newly edited administrator
        return redirect()->route("administrators.show", ["administrator" => $administrator]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
