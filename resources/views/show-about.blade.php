<div class="w-full h-screen bg-gray-800">

    <div class="flex flex-col items-center pt-20">
        <div class="underline text-3xl text-white pb-10 ">
            About
        </div>

        <div class="bg-gray-400 rounded w-1/4">
            <p>
                This is a small project built using concepts learned through
                my web development course. This application is made using Laravel as a framework and using
                several other tools such as php and Composer to build the site and test it properly.
                The testing part of the database was done using both MySQL workbench and server. <br>
            </p>

            <br>
            <p>
                This application is focused on administrating vehicles' conditions in a fleet along with
                maintainence scheduling & tracking drivers hours as well as dispatching vehicles for deliveries.
            </p>

        </div>
        <div class="flex justify-end space-x-4 pt-2">
            <a href="{{ route('home') }}" class="bg-blue-700 text-white rounded px-4 py-2">Go back</a>
        </div>

    </div>

</div>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">