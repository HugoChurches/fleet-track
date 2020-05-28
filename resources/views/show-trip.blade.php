@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Trip details</p>
</div>

<div class="max-w-md space-y-3">
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Vehicle</label>
        <input disabled class="w-full rounded border px-2" type="text" value="{{ $trip->vehicle->make }} - {{ $trip->vehicle->model }}">
    </div>

    @if($trip->user != null)
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Authorized by</label>
        <input disabled class="w-full rounded border px-2" type="text" value="{{ $trip->user->name }}">
    </div>
    @endif

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Driver</label>
        <input disabled class="w-full rounded border px-2" type="text" value="{{ $trip->driver->user->name }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Duration hours</label>
        <input disabled class="w-full rounded border px-2" type="text" value="{{ $trip->duration_hours }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Destination</label>
        <input disabled class="w-full rounded border px-2" type="text" value="{{ $trip->destination }}">
    </div>

    @if($trip->started_on != null)
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Started</label>
        <input disabled class="w-full rounded border px-2" type="text" value="{{ $trip->started_on->diffForHumans()  }}">
    </div>
    @endif

    @if($trip->ended_on != null)
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Ended</label>
        <input disabled class="w-full rounded border px-2" type="text" value="{{ $trip->ended_on->diffForHumans()  }}">
    </div>
    @endif

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Due date</label>
        <input disabled class="w-full rounded border px-2" type="text" value="{{ $trip->due_date }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Trip notes</label>
        <textarea disabled class="w-full rounded border px-2" type="text">{{ $trip->trip_notes }}</textarea>
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Pocket expenses</label>
        <input disabled class="w-full rounded border px-2" type="text" value="${{ $trip->pocket_expenses }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Late fee</label>
        <input disabled class="w-full rounded border px-2" type="text" value="${{ $trip->late_fee }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Bonus</label>
        <input disabled class="w-full rounded border px-2" type="text" value="${{ $trip->bonus }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Pay rate</label>
        <input disabled class="w-full rounded border px-2" type="text" value="${{ $trip->pay_rate }}">
    </div>

    <div class="flex justify-end space-x-4 pt-2">
        <a href="{{route('trips.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Back</a>
    </div>

</div>
@endsection