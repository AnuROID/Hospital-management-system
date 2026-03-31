@vite(['resources/css/app.css', 'resources/js/app.js'])
<nav class="bg-black shadow-md p-4 flex justify-between items-center">
    <x-header />
</nav>
<div class="bg-gray-800 p-6 min-h-screen text-white">
    <div class="flex justify-between mb-6">
        <h1 class="text-2xl font-bold">Appointments</h1>
        <a href="/appointments/create" class="bg-blue-600 px-4 py-2 rounded">+Add Appointments</a>
    </div>
    <div class="bg-gray-500 p-2 text-white rounded">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-gray-400">
                    <th>Doctor</th>
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr class="border-b border-gray-400">
                        <td>{{ $appointment->doctor->name }}</td>
                        <td>{{ $appointment->patient_name }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->appointment_time}}</td>
                        <td>

                        <td class="py-3 px-4">
                            @if ($appointment->status == 'pending')

                                <form action="/appointments/{{ $appointment->id }}/complete" method="POST">
                                    @csrf
                                    <button class="bg-green-500 px-2 py-1 rounded text-sm">
                                        Mark Completed
                                    </button>
                                </form>

                            @else
                                <span class="text-green-400">Completed</span>
                            @endif
                        </td>
                        </td>
                    </tr>

                @endforeach
            </tbody>

        </table>

    </div>
    <div class="mt-6">
        <a href="/dashboard" class="mu-4 bg-gray-500 py-2 px-4 rounded">back</a>

    </div>
</div>
