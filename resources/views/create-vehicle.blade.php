@extends('layouts.app')

@section('content')
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">New Vehicle</p>
</div>

<form class="max-w-md" action="">

    <div class="flex flex-col items-center font-semibold">
        <label class="w-full text-gray-700">Manufacturer</label>
        <input class="w-full rounded border px-2" name="manufacturer" id="manufacturer" placeholder="Manufacturer" type="text">
    </div>

</form>
@endsection