@extends('layouts.app')

@section('content')
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Trips</p>
    <div class="flex items-center">
        <a href="{{route('trips.create')}}" class="bg-green-200 text-green-800 rounded px-2">Request trip</a>
    </div>
</div>

<table class="border rounded">
    <thead>
        <tr>
            <th class="px-4 py-2">Driver</th>
            <th class="px-4 py-2">Vehicle</th>
            <th class="px-4 py-2">Destination</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Duration</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>

    <tbody>
        @foreach($trips as $trip)
        <tr class="border-t border-b">
            <td class="px-4 py-2">{{$trip->driver->user->name}}</td>
            <td class="px-4 py-2">{{$trip->vehicle->make}}</td>
            <td class="px-4 py-2">{{$trip->destination}}</td>
            <td class="px-4 py-2">{{$trip->due_date}}</td>
            <td class="px-4 py-2">Hours {{$trip->duration_hours}}</td>
            <td class="px-4 py-2">
                <a href="{{route('trips.show', ['trip' => $trip])}}" class="bg-gray-200 text-cool-gray-700 rounded px-2">View</a>
                <a href="{{route('trips.edit', ['trip' => $trip])}}" class="bg-blue-200 text-blue-800 rounded px-2">Edit</a>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection