@extends('layouts.app')

@section('content')

<div class="max-w-md space-y-3">


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

    <table class="border rounded">
        <thead>
            <tr>
                <th class="px-4 py-2">Driver</th>
                <th class="px-4 py-2">Vehicle</th>
                <th class="px-4 py-2">Destination</th>
                <th class="px-4 py-2">Due date</th>
                <th class="px-4 py-2">Duration</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Total cost</th>

                <th class="px-4 py-2"></th>
            </tr>
        </thead>

        <tbody>
            @foreach($driver->trips as $trip)
            <tr class="border-t border-b">
                <td class="px-4 py-2">{{$trip->driver->user['name']}}</td>
                <td class="px-4 py-2">{{$trip->vehicle->make}}</td>
                <td class="px-4 py-2">{{$trip->destination}}</td>
                <td class="px-4 py-2">{{$trip->due_date}}</td>
                <td class="px-4 py-2">Hours {{$trip->duration_hours}}</td>
                <td class="px-4 py-2">{{$trip->status()}}</td>
                <td class="px-4 py-2">{{$trip->totalCost()}}</td>

                <td class="px-4 py-2">
                    <a href="{{route('trips.show', ['trip' => $trip])}}" class="bg-gray-200 text-cool-gray-700 rounded px-2">View</a>
                    <a href="{{route('trips.edit', ['trip' => $trip])}}" class="bg-blue-200 text-blue-800 rounded px-2">Edit</a>

                    @if($trip->status() == 'Scheduled')
                    <form action="{{route('trips.start', ['trip' => $trip])}}" method="POST">
                        @csrf
                        <button class="bg-green-200 text-green-800 rounded px-2">Start trip</button>
                    </form>
                    @endif

                    @if($trip->status() == 'In progress')
                    <form action="{{route('trips.end', ['trip' => $trip])}}" method="POST">
                        @csrf
                        <button class="bg-green-200 text-green-800 rounded px-2">End trip</button>
                    </form>
                    @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection