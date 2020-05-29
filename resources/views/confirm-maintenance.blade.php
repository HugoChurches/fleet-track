@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Delete maintenance</p>
</div>

<form class="max-w-md space-y-3" action="{{route('maintenances.destroy', ['maintenance' => $maintenance])}}" method="POST">
    @csrf
    @method('DELETE')

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
            <a href="{{route('maintenances.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Cancel</a>
            <button href="{{route('maintenances.destroy', ['maintenance' => $maintenance])}}" class="bg-red-200 text-red-800 rounded px-4 py-2">Confirm</button>
        </div>

    </div>
</form>

@endsection