<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>FleetTrack</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-gray-800">

    <div class="w-full flex flex-col items-center justify-center space-y-6">

        <div class="flex justify-end absolute top-0 right-0">
            <a class="font-semibold text-white m-2" href="about.html">About us</a>
            <a class="font-semibold text-white m-2" href="contact.html">Contact</a>
        </div>

        <div class="flex flex-col items-center pt-32">
            <h1 class="text-gray-100 text-2xl">Register an account</h1>
        </div>
        <!-- Here are the contents of the box -->
        <form method="POST" class="max-w-xs flex flex-col items-center space-y-6" action="{{ route('register') }}">
            @csrf

            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full">Name</p>
                <input class="w-full rounded" name="name" id="name" value="{{ old('name') }}" placeholder="Your name" type="text">
                @error('name')
                <p class="text-red-400 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full">E-mail</p>
                <input class="w-full rounded" name="email" id="email" value="{{ old('email') }}" placeholder="Your e-mail" type="email">
                @error('name')
                <p class="text-red-400 font-semibold">{{ $message }}</p>
                @enderror

            </div>

            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full">Address</p>
                <input class="w-full rounded" name="address" id="address" value="{{ old('address') }}" placeholder="Address" type="text">
                @error('address')
                <p class="text-red-400 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full">Phone Number</p>
                <input class="w-full rounded" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Phone Number" type="text">
                @error('phone')
                <p class="text-red-400 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full">Driver's license ID</p>
                <input class="w-full rounded" name="license_id" id="license_id" value="{{ old('license_id') }}" placeholder="Driver's license ID" type="text">
                @error('license_id')
                <p class="text-red-400 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full">Driver's license ID's expiry date</p>
                <input class="w-full rounded" name="license_id_exp" id="license_id_exp" value="{{ old('license_id_exp') }}" placeholder="Driver's license ID's expiry date" type="date">
                @error('license_id_exp')
                <p class="text-red-400 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full">Transport certifications</p>
                <textarea class="w-full rounded" name="transport_certifications" id="transport_certifications" placeholder="Transport certifications">{{ old('transport_certifications') }}</textarea>
            </div>


            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full">Password</p>
                <input class="w-full rounded" name="password" id="password" placeholder="Your password" type="password">
                @error('password')
                <p class="text-red-400 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex flex-col items-center font-semibold space-y-2">
                <p class="text-blue-200 w-full"> Confirm Password</p>
                <input class="w-full rounded" name="password_confirmation" id="cpassword" placeholder="Confirm password" type="password">
                @error('password_confirmation')
                <p class="text-red-400 font-semibold">{{ $message }}</p>
                @enderror
            </div>


            <button class="w-full text-white rounded bg-blue-600 font-semibold border-blue-700 border-b-3 hover:bg-blue-400 hover:border-blue-400 py-2 px-2 ">
                Create an account
            </button>
        </form>

        <div class="flex flex-col items-center">
            <p class="text-gray-600">Already have an account?</p>
            <a href="/login" class="text-blue-200 hover:underline rounded border-blue-700 border-transparent border-b-3 hover:border-blue-400 py-2 px-2 ">
                Log
                in instead
            </a>
        </div>
    </div>
    <script src="script.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</body>

</html>