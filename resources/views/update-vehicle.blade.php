@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Update Vehicle</p>
</div>

<form class="max-w-md space-y-3" action="{{route('vehicles.update', ["vehicle" => $vehicle])}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Manufacturer</label>
        <input class="w-full rounded border px-2" name="make" id="make" placeholder="Manufacturer" type="text" value="{{ old('make', $vehicle->make) }}">
        @error('make')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Model</label>
        <input class="w-full rounded border px-2" name="model" id="model" placeholder="Model" type="text" value="{{ old('model', $vehicle->model) }}">
        @error('model')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Color</label>
        <input class="w-full rounded border px-2" name="color" id="color" placeholder="Color" type="text" value="{{ old('color', $vehicle->color) }}">
        @error('color')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Engine Number</label>
        <input class="w-full rounded border px-2" name="engine_number" id="engine_number" placeholder="Engine Number" type="text" value="{{ old('engine_number', $vehicle->engine_number) }}">
        @error('engine_number')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Location</label>
        <input class="w-full rounded border px-2" name="location" id="location" placeholder="Location" type="text" value="{{ old('location', $vehicle->location) }}">
        @error('location')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Year</label>
        <input class="w-full rounded border px-2" name="year" id="year" placeholder="Year" type="number" value="{{ old('year', $vehicle->year) }}">
        @error('year')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>
        @enderror
    </div>


    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Mileage</label>
        <input class="w-full rounded border px-2" name="mileage" id="mileage" placeholder="Mileage" type="number" step="any" value="{{ old('mileage', $vehicle->mileage) }}">
        @error('mileage')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>
        @enderror
    </div>


    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Next service at</label>
        <input class="w-full rounded border px-2" name="next_service" id="next_service" placeholder="Mileage" type="date" value="{{ old('next_service', $vehicle->next_service) }}">
        @error('mileage')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>
        @enderror
    </div>


    <div class="flex justify-end space-x-2">
        <div class="flex justify-end pt-2">
            <a href="{{route('vehicles.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Cancel</a>
        </div>

        <div class="flex justify-end pt-2">
            <button class="bg-gray-700 text-white rounded px-4 py-2">Update</button>
        </div>
    </div>
</form>
@endsection