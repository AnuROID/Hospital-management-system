<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yora dahsboard </title>
     @vite(['resources/css/app.css'])

</head>
<body class="bg-gray-900 text-white">
      <nav class="bg-black shadow-md p-4 flex justify-between items-center">
        <x-header/>
    </nav>



<div class="p-6">

        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
                <h2 class="text-gray-400 text-sm">Total Doctors</h2>
                <p class="text-3xl font-bold mt-2 text-blue-400">
                    {{ $total}}
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
                <h2 class="text-gray-400 text-sm">Today's Appointments</h2>
                <p class="text-3xl font-bold mt-2 text-green-400">
                    {{ $totalAppointments }}
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
                <h2 class="text-gray-400 text-sm">Pending</h2>
                <p class="text-3xl font-bold mt-2 text-yellow-400">
                    {{ $pending }}
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
                <h2 class="text-gray-400 text-sm">Completed</h2>
                <p class="text-3xl font-bold mt-2 text-purple-400">
                    {{ $completed }}
                </p>
            </div>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-8">

            <div class="bg-gray-800 p-6 rounded-2xl shadow">
                <h2 class="text-xl font-semibold mb-4">Doctors Overview</h2>
                <p class="text-gray-400">
                    Manage doctors, their timings and availability.
                </p>
                <a href="/doctors" class="inline-block mt-4 text-blue-400 hover:underline">
                    View Doctors →
                </a>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl shadow">
                <h2 class="text-xl font-semibold mb-4">Appointments</h2>
                <p class="text-gray-400">
                    Track and manage daily patient appointments.
                </p>
                <a href="/appointments" class="inline-block mt-4 text-green-400 hover:underline">
                    View Appointments →
                </a>
            </div>

        </div>

    </div>
</div>
</body>
</html>
