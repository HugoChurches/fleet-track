@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Request trip</p>
</div>

<form class="max-w-md space-y-3" action="{{route('trips.store')}}" method="POST" novalidate>
    @csrf
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Duration hours</label>
        <input class="w-full rounded border px-2" name="duration_hours" id="duration_hours" placeholder="Duration hours" type="text" required value="{{ old('duration_hours') }}">
        @error('duration_hours')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Destination</label>
        <input class="w-full rounded border px-2" name="destination" id="destination" placeholder="Destination" type="text" required value="{{ old('destination') }}">
        @error('destination')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Due date</label>
        <input class="w-full rounded border px-2" name="due_date" id="due_date" placeholder="Due date" type="date" required value="{{ old('due_date') }}">
        @error('due_date')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Vehicle</label>
        <select name="vehicle_id" class="w-full rounded border px-2">
            <option value="" selected disabled>Please select a vehicle</option>
            @foreach($vehicles as $vehicle)
            <option value="{{$vehicle->id}}">{{$vehicle->model}} - {{$vehicle->engine_number}}</option>
            @endforeach
        </select>
        @error('vehicle_id')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex justify-end space-x-2">
        <div class="flex justify-end pt-2">
            <a href="{{route('trips.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Cancel</a>
        </div>

        <div class="flex justify-end pt-2">
            <button class="bg-gray-700 text-white rounded px-4 py-2">Request trip</button>
        </div>
    </div>

</form>
@endsection