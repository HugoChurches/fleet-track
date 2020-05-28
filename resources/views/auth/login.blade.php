<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>FleetTrack</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="w-full  h-screen bg-gray-800 flex flex-col items-center justify-center space-y-6">

        <div class="flex justify-end absolute top-0 right-0">
            <a class="font-semibold text-white m-2" href="{{ route('about.about') }}">About us</a>
            <a class="font-semibold text-white m-2" href="{{ route('contact.contact') }}">Contact</a>
        </div>


        <div class="flex flex-col items-center">
            <h1 class="text-gray-100 text-2xl">Login</h1>
        </div>
        <!-- Here are the contents of the box -->
        <form method="POST" class="max-w-xs flex flex-col items-center space-y-6" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col items-center font-semibold">
                <label class="w-full text-blue-200">E-mail</label>
                <input class="w-full rounded border px-2" name="email" id="email" placeholder="E-mail" type="email">
            </div>


            <div class="flex flex-col items-center font-semibold">
                <label class="w-full text-blue-200">Password</label>
                <input class="w-full rounded border px-2" name="password" id="password" placeholder="Your Password" type="password">
            </div>

            <button class="w-full text-white rounded bg-blue-600 font-semibold border-blue-700 border-b-3 hover:bg-blue-400 hover:border-blue-400 py-2 px-2 ">
                Submit
            </button>
        </form>

        <div class="flex justify-center">
            <a href="/register" class="text-blue-200 hover:underline rounded border-blue-700 border-transparent border-b-3 hover:border-blue-400 py-2 px-2 ">
                Create an account
            </a>
        </div>
    </div>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</body>

</html>