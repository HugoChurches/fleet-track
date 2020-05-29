@extends('layouts.app')

@section('content')
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
        @foreach($trips as $trip)
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
                @can('admin-access')
                <a href="{{route('trips.edit', ['trip' => $trip])}}" class="bg-blue-200 text-blue-800 rounded px-2">Edit</a>
                @endcan
                <a href="{{route('trips.showNotes', ['trip' => $trip])}}" class="bg-blue-200 text-blue-800 rounded px-2">Add notes</a>


                @can('admin-access')
                @if($trip->status() == 'Pending authorization')
                <form action="{{route('trips.authorize', ['trip' => $trip])}}" method="POST">
                    @csrf
                    <button class="bg-green-200 text-green-800 rounded px-2">Authorize</button>
                </form>
                @endif

                @if($trip->status() == 'Pending authorization')
                <form action="{{route('trips.destroy', ['trip' => $trip])}}" method="POST">
                    @method('DELETE')

                    @csrf
                    <button class="bg-red-200 text-red-800 rounded px-2">Deny</button>
                </form>
                @endif
                @endcan


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