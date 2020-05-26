@extends('layouts.app')

@section('content')
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Drivers</p>
</div>

<table class="border rounded">
    <thead>
        <tr>
            <th class="px-4 py-2">General information</th>
            <th class="px-4 py-2">Address</th>
            <th class="px-4 py-2">Driver's license</th>
            <th class="px-4 py-2">Transport materials certifications</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>
    <tbody>

        <tr class="border-t border-b">
            <td class="px-4 py-2">
                <p class="py-0">Churches</p>
                <p class="py-0">+91188471</p>
                <p class="py-0">21 years old</p>
            </td>
            <td class="px-4 py-2">M. Street</td>
            <td class="px-4 py-2">
                <p class="py-0">ID: YMMMDW112</p>
                <p class="py-0">Expiry: 12/22/2023</p>
            </td>
            <td class="px-4 py-2">None</td>
            <td class="px-4 py-2">
                <button class="bg-gray-200 text-cool-gray-700 rounded px-2">View</button>
                <button class="bg-blue-200 text-blue-800 rounded px-2">Edit</button>
                <button class="bg-green-200 text-green-800 rounded px-2">Authorize</button>
                <button class="bg-red-200 text-red-800 rounded px-2">Deny</button>
            </td>

        </tr>

    </tbody>
</table>
@endsection