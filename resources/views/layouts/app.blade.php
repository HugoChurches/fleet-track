<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="h-full w-64 fixed z-1 top-0 left-0 bg-gray-700 overflow-x-hidden pt-6">
        @can('admin-access')
        <a class="px-6 py-4 text-gray-400 hover:text-white text-2xl block" href="{{route('vehicles.index')}}">Vehicles</a>
        @endcan
        @can('admin-access')
        <a class="px-6 py-4 text-gray-400 hover:text-white text-2xl block" href="{{route('maintenances.index')}}">Maintenances</a>
        @endcan
        @can('admin-access')
        <a class="px-6 py-4 text-gray-400 hover:text-white text-2xl block" href="{{route('drivers.index')}}">Drivers</a>
        @endcan
        @can('admin-access')
        <a class="px-6 py-4 text-gray-400 hover:text-white text-2xl block" href="{{route('trips.index')}}">Trips</a>
        @endcan
        @can('driver-access')
        <a class="px-6 py-4 text-gray-400 hover:text-white text-2xl block" href="{{route('trips.create')}}">Request trip</a>
        @endcan
        @can('admin-access')
        <a class="px-6 py-4 text-gray-400 hover:text-white text-2xl block" href="{{route('administrators.index')}}">Admins</a>
        @endcan
        <form class="w-full" id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="text-left w-full px-6 py-4 text-gray-400 hover:text-white text-2xl block border-t border-gray-600" href="#contact">Logout</button>
        </form>
    </div>

    <div class="ml-64 px-3 mt-12">
        @yield('content')
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @if(Session::has('success'))
    <script type="text/javascript">
        swal({
            title: 'Success!',
            text: "{{Session::get('success')}}",
            timer: 5000,
            icon: 'success'
        }).then((value) => {
            //location.reload();
        }).catch(swal.noop);
    </script>
    @endif

</body>

</html>

</body>

</html>