@extends('layouts.app')

@section('content')
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Trip details</p>
</div>

<div class="flex flex-col font-semibold">
    <label class="w-full text-gray-700">Name</label>
    <input disabled class="w-full rounded border px-2" id="name" type="text" value="{{ $trip->name }}">
</div>

<div class="flex flex-col font-semibold">
    <label class="w-full text-gray-700">E-mail</label>
    <input disabled class="w-full rounded border px-2" id="email" type="email" value="{{ $trip->email }}">
</div>



@endsection