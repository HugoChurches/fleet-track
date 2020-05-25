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
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>

    <tbody>
        <tr class="border-t border-b">
            <td class="px-4 py-2">IVECO</td>
            <td class="px-4 py-2">Altex</td>
            <td class="px-4 py-2">IVECO</td>
            <td class="px-4 py-2">Altex</td>
            <td class="px-4 py-2">
                <button class="bg-gray-200 text-cool-gray-700 rounded px-2">View</button>
                <button class="bg-blue-200 text-blue-800 rounded px-2">Edit</button>
            </td>
        </tr>


    </tbody>
</table>
@endsection