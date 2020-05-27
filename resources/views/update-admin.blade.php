@extends('layouts.app')

@section('content')

<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">Update Administrator</p>
</div>

<form class="max-w-md space-y-3" action="{{route('administrators.update', ["administrator" => $administrator])}}" method="POST" novalidate>
    @csrf
    @method('PATCH')
    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Name</label>
        <input class="w-full rounded border px-2" name="name" id="name" placeholder="Name" type="text" required value="{{old('name')}}">
        @error('name')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">E-mail</label>
        <input class="w-full rounded border px-2" name="email" id="email" placeholder="E-mail" type="email" required value="{{old('email')}}">
        @error('email')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Password</label>
        <input class="w-full rounded border px-2" name="password" id="password" placeholder="Password" type="password" required>
        @error('password')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col font-semibold">
        <label class="w-full text-gray-700">Confirm password</label>
        <input class="w-full rounded border px-2" name="password_confirmation" id="password" placeholder="Confirm password" type="password" required>
        @error('confirm_password')
        <p class="text-red-400 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex justify-end space-x-2">
        <div class="flex justify-end pt-2">
            <a href="{{route('administrators.index')}}" class="bg-gray-300 text-gray-700 rounded px-4 py-2">Cancel</a>
        </div>

        <div class="flex justify-end pt-2">
            <button class="bg-gray-700 text-white rounded px-4 py-2">Update</button>
        </div>
    </div>
</form>
@endsection