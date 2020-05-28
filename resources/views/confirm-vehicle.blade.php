@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Delete vehicle</p>
</div>

<form class="max-w-md space-y-3" action="{{route('vehicles.destroy', ["vehicle" => $vehicle])}}" method="POST">
    @csrf
    @method('DELETE')

    <div class="max-w-md space-y-3">
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
            <input disabled class="w-full rounded border px-2" id="next_service" value="{{ $vehicle->next_service }}">
        </div>

        <div class="flex justify-end space-x-4 pt-2">
            <a href="{{route('vehicles.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Cancel</a>
            <button href="{{route('vehicles.destroy', ['vehicle' => $vehicle])}}" class="bg-red-200 text-red-800 rounded px-4 py-2">Confirm</button>
        </div>
    </div>
</form>

@endsection