@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Edit trip</p>
</div>

<form class="max-w-md space-y-3" action="{{route('trips.update', ["trip"=>$trip])}}" method="POST" novalidate>
    @csrf
    @method('PATCH')
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Duration hours</label>
        <input class="w-full rounded border px-2" name="duration_hours" type="text" value="{{ old('duration_hours', $trip->duration_hours) }}">
        @error('duration_hours')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>

        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Destination</label>
        <input class="w-full rounded border px-2" name="destination" type="text" value="{{ old('destination', $trip->destination) }}">
        @error('destination')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>

        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Due date</label>
        <input class="w-full rounded border px-2" name="due_date" type="text" value="{{ old('due_date',  $trip->due_date) }}">
        @error('due_date')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>

        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Trip notes</label>
        <textarea class="w-full rounded border px-2" name="trip_notes" type="text">{{ old('trip_notes',  $trip->trip_notes) }}</textarea>
        @error('trip_notes')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>

        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Pocket expenses</label>
        <input class="w-full rounded border px-2" name="pocket_expenses" type="numeric" value="{{ old('pocket_expenses', $trip->pocket_expenses) }}">
        @error('pocket_expenses')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>

        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Late fee</label>
        <input class="w-full rounded border px-2" name="late_fee" type="numeric" value="{{ old('late_fee', $trip->late_fee) }}">
        @error('late_fee')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>

        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Bonus</label>
        <input class="w-full rounded border px-2" name="bonus" type="numeric" value="{{ old('bonus', $trip->bonus) }}">
        @error('bonus')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>

        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Pay rate</label>
        <input class="w-full rounded border px-2" name="pay_rate" type="numeric" value="{{ old('pay_rate', $trip->pay_rate) }}">
        @error('pay_rate')
        <p class="text-red-400 font-semibold ">{{ $message }}</p>

        @enderror
    </div>

    <div class="flex justify-end space-x-4 pt-2">
        <a href="{{route('trips.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Back</a>
        <button href="{{route('trips.update', ['trip' => $trip])}}" class="bg-gray-700 text-white rounded px-4 py-2">Confirm</button>

    </div>


    </div>
</form>
@endsection