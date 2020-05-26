@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Vehicle details</p>
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
    <input disabled class="w-full rounded border px-2" id="year" type="number" value="{{ $vehicle->year }}">
</div>

<div class="flex flex-col font-semibold">
    <label class="w-full text-gray-700">Mileage</label>
    <input disabled class="w-full rounded border px-2" id="mileage" type="number" step="any" value="{{ $vehicle->mileage }}">
</div>

@endsection