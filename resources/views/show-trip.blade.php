@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Trip details</p>
    <div class="flex items-center">
    </div>
</div>


<table class="border rounded">
    <thead>
        <tr>
            <th class="px-4 py-2">Driver</th>
            <th class="px-4 py-2">Vehicle</th>
            <th class="px-4 py-2">Destination</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>

    <tbody>
        <tr class="border-t border-b">
            <td class="px-4 py-2">{{$trip->driver->user->name}}</td>
            <td class="px-4 py-2">
                <p>Make: {{$trip->vehicle->make}}</p>
                <p>Model: {{$trip->vehicle->model}}</p>
                <p>EG: {{$trip->vehicle->engine_number}}</p>
                <p>Location: {{$trip->vehicle->location}}</p>
            </td>
            <td class="px-4 py-2">{{$trip->destination}}</td>
            <td class="px-4 py-2">{{$trip->due_date}}</td>
            </td>
        </tr>
    </tbody>

</table>

<div class="flex justify-left pt-2">
    <a href="{{route('trips.index')}}" class="bg-gray-700 text-white rounded px-4 py-2">Back</a>
</div>
@endsection