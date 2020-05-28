@extends('layouts.app')

@section('content')

<div class="max-w-md space-y-3">

    <div class="flex items-center space-x-3 mb-6">
        <p class="text-3xl mb-0">Schedule maintenance</p>
    </div>

    <form class="max-w-md space-y-3" action="{{route('maintenances.store')}}" method="POST">
        @csrf

        <label class="w-full text-gray-700">Vehicle</label>
        <select name="vehicle_id" class="w-full rounded border px-2">
            <option value="" selected disabled>Please select a vehicle</option>
            @foreach($vehicles as $vehicle)
            <option value="{{$vehicle->id}}">{{$vehicle->make}}-{{$vehicle->model}}</option>
            @endforeach
        </select>
        @error('vehicle_id')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror

        <div class="flex flex-col font-semibold">
            <label class="w-full text-gray-700">Notes</label>
            <textarea class="w-full rounded border px-2" id="notes" name="notes" type="text" value="{{ old('notes') }}"></textarea>
            @error('notes')
            <p class=" text-red-400 font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end space-x-2">
            <div class="flex justify-end pt-2">
                <a href="{{route('maintenances.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Cancel</a>
            </div>
            <div class="flex justify-end pt-2">
                <button class="bg-gray-700 text-white rounded px-4 py-2">Create maintenance</button>
            </div>
        </div>

    </form>
</div>

@endsection