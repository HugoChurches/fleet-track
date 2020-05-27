@extends('layouts.app')

@section('content')

<div class="max-w-md space-y-3">

    <div class="flex items-center space-x-3 mb-6">
        <p class="text-3xl mb-0">Administrator details</p>
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Name</label>
        <input disabled class="w-full rounded border px-2" id="name" type="text" value="{{ $administrator->name }}">
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">E-mail</label>
        <input disabled class="w-full rounded border px-2" id="email" type="email" value="{{ $administrator->email }}">
    </div>

    <div class="flex justify-end space-x-2">
        <div class="flex justify-end pt-2">
            <a href="{{route('administrators.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Back</a>
        </div>

    </div>


    @endsection