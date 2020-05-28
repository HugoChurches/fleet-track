@extends('layouts.app')

@section('content')
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Drivers</p>
</div>
<table class="border rounded">
    <thead>
        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">E-mail</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($drivers as $driver)
        <tr class="border-t border-b">
            <td class="px-4 py-2">{{$driver->user->name}}</td>
            <td class="px-4 py-2">{{$driver->user->email}}</td>
            <td class="px-4 py-2">
                <a href="{{route('drivers.show', ['driver' => $driver])}}" class="bg-gray-200 text-cool-gray-700 rounded px-2">View</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection