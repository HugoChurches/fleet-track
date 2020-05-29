@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Maintenance</p>
</div>

<div class="max-w-md space-y-3">
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Vehicle</label>
        <input disabled class="w-full rounded border px-2" id="make" type="text" value="{{ $maintenance->vehicle->make }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Model</label>
        <input disabled class="w-full rounded border px-2" id="make" type="text" value="{{ $maintenance->vehicle->model }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Engine Number</label>
        <input disabled class="w-full rounded border px-2" id="make" type="text" value="{{ $maintenance->vehicle->engine_number }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Notes</label>
        <input disabled class="w-full rounded border px-2" id="make" type="text" value="{{ $maintenance->notes}}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Status</label>
        <input disabled class="w-full rounded border px-2" id="make" type="text" value="{{ $maintenance->status() }}">
    </div>

    @if($maintenance->started_on != null)
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Started</label>
        <input disabled class="w-full rounded border px-2" id="make" type="text" value="{{ $maintenance->started_on->diffForHumans()  }}">
    </div>
    @endif

    @if($maintenance->ended_on != null)
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Ended</label>
        <input disabled class="w-full rounded border px-2" id="make" type="text" value="{{ $maintenance->ended_on->diffForHumans()  }}">
    </div>
    @endif

    <div class="flex justify-end space-x-4 pt-2">
        <a href="{{route('maintenances.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Back</a>
    </div>
</div>

@endsection