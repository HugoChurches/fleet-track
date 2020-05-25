@extends('layouts.app')

@section('content')
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Vehicles</p>
    <div class="flex items-center">
        <button class="bg-green-200 text-green-800 rounded px-2">Add vehicle</button>
    </div>
</div>

<table class="border rounded">
    <thead>
        <tr>
            <th class="px-4 py-2">Manufacturer</th>
            <th class="px-4 py-2">Model</th>
            <th class="px-4 py-2">Details</th>
            <th class="px-4 py-2">Mileage</th>
            <th class="px-4 py-2">Location</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>
    <tbody>
        <tr class="border-t border-b">
            <td class="px-4 py-2">IVECO</td>
            <td class="px-4 py-2">Altex</td>
            <td class="px-4 py-2">
                <p class="py-0">Color: Yellow</p>
                <p class="py-0">EG: 112DFF4451248</p>
            </td>
            <td class="px-4 py-2">115,089</td>
            <td class="px-4 py-2">Bay 5</td>
            <td class="px-4 py-2">
                <button class="bg-gray-200 text-cool-gray-700 rounded px-2">View</button>
                <button class="bg-blue-200 text-blue-800 rounded px-2">Edit</button>
            </td>

        </tr>

        <tr class="border-t border-b">
            <td class="px-4 py-2">IVECO</td>
            <td class="px-4 py-2">Altex</td>
            <td class="px-4 py-2">
                <p class="py-0">Color: Yellow</p>
                <p class="py-0">EG: 112DFF4451248</p>
            </td>
            <td class="px-4 py-2">115,089</td>
            <td class="px-4 py-2">Bay 5</td>
            <td class="px-4 py-2">
                <button class="bg-gray-200 text-cool-gray-700 rounded px-2">View</button>
                <button class="bg-blue-200 text-blue-800 rounded px-2">Edit</button>
            </td>

        </tr>
        <tr class="border-t border-b">
            <td class="px-4 py-2">IVECO</td>
            <td class="px-4 py-2">Altex</td>
            <td class="px-4 py-2">
                <p class="py-0">Color: Yellow</p>
                <p class="py-0">EG: 112DFF4451248</p>
            </td>
            <td class="px-4 py-2">115,089</td>
            <td class="px-4 py-2">Bay 5</td>
            <td class="px-4 py-2">
                <button class="bg-gray-200 text-cool-gray-700 rounded px-2">View</button>
                <button class="bg-blue-200 text-blue-800 rounded px-2">Edit</button>
            </td>

        </tr>
    </tbody>
</table>
@endsection