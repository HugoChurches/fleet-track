@extends('layouts.app')
@section('content')

<div class="max-w-md space-y-3">
    <div class="flex items-center space-x-3 mb-6">
        <p class="text-3xl mb-0">Maintenances</p>
        <div class="flex items-center">
            <a href="{{route('maintenances.create')}}" class="bg-green-200 text-green-800 rounded px-2">Schedule maintenance</a>
        </div>
    </div>
</div>

<table class="border rounded">
    <thead>
        <tr>
            <th class="px-4 py-2">Vehicle</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($maintenances as $maintenance)
        <tr class="border-t border-b">
            <td class="px-4 py-2">{{$maintenance->vehicle->model}} - {{$maintenance->vehicle->engine_number}}</td>
            <td class="px-4 py-2">{{$maintenance->status()}}</td>
            <td class="px-4 py-2">
                <a href="{{route('maintenances.show', ['maintenance' => $maintenance])}}" class="bg-gray-200 text-cool-gray-700 rounded px-2">View</a>
                <a href="{{route('maintenances.delete', ['maintenance' => $maintenance])}}" class="bg-red-200 text-red-800 rounded px-2">Delete</a>

                @if($maintenance->status() == 'Scheduled')
                <form action="{{route('maintenances.start', ['maintenance' => $maintenance])}}" method="POST">
                    @csrf
                    <button class="bg-green-200 text-green-800 rounded px-2">Start maintenance</button>
                </form>
                @endif

                @if($maintenance->status() == 'In progress')
                <form action="{{route('maintenances.end', ['maintenance' => $maintenance])}}" method="POST">
                    @csrf
                    <button class="bg-green-200 text-green-800 rounded px-2">End maintenance</button>
                </form>
                @endif

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection