@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Vehicle details</p>
</div>




<div class="max-w-md space-y-3">

    <div class="flex justify-start space-x-2">
        <a href="{{route('vehicles.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Back</a>
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Manufacturer</label>
        <input disabled class="w-full rounded border px-2" id="make" type="text" value="{{ $vehicle->make }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Model</label>
        <input disabled class="w-full rounded border px-2" id="model" type="text" value="{{ $vehicle->model }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Color</label>
        <input disabled class="w-full rounded border px-2" id="color" type="text" value="{{ $vehicle->color }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Engine Number</label>
        <input disabled class="w-full rounded border px-2" id="engine_number" type="text" value="{{ $vehicle->engine_number }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Location</label>
        <input disabled class="w-full rounded border px-2" id="location" type="text" value="{{ $vehicle->location }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Year</label>
        <input disabled class="w-full rounded border px-2" id="year" value="{{ $vehicle->year }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Mileage</label>
        <input disabled class="w-full rounded border px-2" id="mileage" value="{{ $vehicle->mileage }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Next service at</label>
        <input disabled class="w-full rounded border px-2" id="mileage" value="{{ $vehicle->next_service }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Status</label>
        <input disabled class="w-full rounded border px-2" id="status" value="{{ $vehicle->status() }}">
    </div>

    <div class="max-w-md space-y-3">
        <div class="flex items-center space-x-3 mb-6">
            <p class="text-3xl mb-0">Maintenances</p>
        </div>
    </div>

    <table class="border rounded">
        <thead>
            <tr>
                <th class="px-4 py-2">Vehicle</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicle->maintenances as $maintenance)
            <tr class="border-t border-b">
                <td class="px-4 py-2">{{$maintenance->vehicle->model}} - {{$maintenance->vehicle->engine_number}}</td>
                <td class="px-4 py-2">{{$maintenance->status()}}</td>
                <td class="px-4 py-2">
                    <a href="{{route('maintenances.show', ['maintenance' => $maintenance])}}" class="bg-gray-200 text-cool-gray-700 rounded px-2">View</a>
                    <a href="{{route('maintenances.delete', ['maintenance' => $maintenance])}}" class="bg-red-200 text-red-800 rounded px-2">Delete</a>

                    @if($maintenance->status() == 'Scheduled')
                    <form action="{{route('maintenances.start', ['maintenance' => $maintenance])}}" method="POST">
                        @csrf
                        <button class="bg-green-200 text-green-800 rounded px-2">Start maintenance</button>
                    </form>
                    @endif

                    @if($maintenance->status() == 'In progress')
                    <form action="{{route('maintenances.end', ['maintenance' => $maintenance])}}" method="POST">
                        @csrf
                        <button class="bg-green-200 text-green-800 rounded px-2">End maintenance</button>
                    </form>
                    @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


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
            @foreach($vehicle->trips as $trip)
            <tr class="border-t border-b">
                <td class="px-4 py-2">{{$trip->driver->user->name}}</td>
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