@extends('layouts.app')

@section('content')
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Vehicles</p>
    <div class="flex items-center">
        <a href="{{route('vehicles.create')}}" class="bg-green-200 text-green-800 rounded px-2">Add vehicle</a>
    </div>
</div>

<table class="border rounded">
    <thead>
        <tr>
            <th class="px-4 py-2">Manufacturer</th>
            <th class="px-4 py-2">Model</th>
            <th class="px-4 py-2">Details</th>
            <th class="px-4 py-2">Mileage</th>
            <th class="px-4 py-2">Location</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
        <tr class="border-t border-b">
            <td class="px-4 py-2">{{$vehicle->make}}</td>
            <td class="px-4 py-2">{{$vehicle->model}}</td>
            <td class="px-4 py-2">
                <p class="py-0">Color: {{$vehicle->color}}</p>
                <p class="py-0">EG: {{$vehicle->engine_number}}</p>
            </td>
            <td class="px-4 py-2">{{$vehicle->mileage}}
                <p>Next service at: {{$vehicle->next_service}}</p>
            </td>
            <td class="px-4 py-2">{{$vehicle->location}}</td>
            <td class="px-4 py-2">{{$vehicle->status}}</td>

            <td class="px-4 py-2">
                <a href="{{route('vehicles.show', ['vehicle' => $vehicle])}}" class="bg-gray-200 text-cool-gray-700 rounded px-2">View</a>
                <a href="{{route('vehicles.edit', ['vehicle' => $vehicle])}}" class="bg-blue-200 text-blue-800 rounded px-2">Edit</a>
                <a href="{{route('vehicles.delshow', ['vehicle' => $vehicle])}}" class="bg-red-200 text-red-800 rounded px-2">Remove</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection