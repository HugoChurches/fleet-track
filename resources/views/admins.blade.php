@extends('layouts.app')

@section('content')
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Administrators</p>
    <div class="flex items-center">
        <a href="{{route('administrators.create')}}" class="bg-green-200 text-green-800 rounded px-2">Add new administrator</a>
    </div>
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
        @foreach($admins as $admin)

        <tr class="border-t border-b">
            <td class="px-4 py-2">{{$admin->name}}</td>
            <td class="px-4 py-2">{{$admin->email}}</td>
            <td class="px-4 py-2">
                <a href="{{route('administrators.show', ['administrator' => $admin])}}" class="bg-gray-200 text-cool-gray-700 rounded px-2">View</a>
                <button class="bg-blue-200 text-blue-800 rounded px-2">Edit</button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection