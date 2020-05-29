@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Delete driver</p>
</div>

<form class="max-w-md space-y-3" action="{{route('drivers.destroy', ['driver' => $driver])}}" method="POST">
    @csrf
    @method('DELETE')


    <div class="flex items-center space-x-3 mb-6">
        <p class="text-3xl mb-0">Driver details</p>

    </div>
    <div class="flex justify-start space-x-2">
        <a href="{{route('drivers.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Back</a>
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Name</label>
        <input disabled class="w-full rounded border px-2" id="name" type="text" value="{{ $driver->user['name'] }}">
    </div>


    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">E-mail</label>
        <input disabled class="w-full rounded border px-2" id="email" type="text" value="{{ $driver->user['email'] }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Address</label>
        <input disabled class="w-full rounded border px-2" id="address" type="text" value="{{ $driver->address }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Phone</label>
        <input disabled class="w-full rounded border px-2" id="phone" type="text" value="{{ $driver->phone }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">License Number</label>
        <input disabled class="w-full rounded border px-2" id="license_number" type="text" value="{{ $driver->license_number }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">License expires on</label>
        <input disabled class="w-full rounded border px-2" id="license_expires_on" type="text" value="{{ $driver->license_expires_on }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Certifications</label>
        <input disabled class="w-full rounded border px-2" id="certifications" type="text" value="{{ $driver->certifications }}">
    </div>

    <div class="flex items-center space-x-3 mb-6">
        <p class="text-3xl mb-0">Trips</p>
    </div>


</form>

@endsection