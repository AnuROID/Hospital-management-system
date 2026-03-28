@vite(['resources/css/app.css', 'resources/js/app.js'])
<nav class="bg-black shadow-md p-4 flex justify-between items-center">
    <x-header />
</nav>
<div class="p-6 bg-gray-900 min-h-screen text-white">

    <h1 class="text-2xl mb-6">Add Appointment</h1>

    <form action="/appointments" method="POST" class="space-y-4">
        @csrf

        <!-- Doctor Dropdown -->
        <select name="doctor_id" class="w-full p-2 bg-gray-800 rounded">
            @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">
                    {{ $doctor->name }}
                </option>
            @endforeach
        </select>

        <input name="patient_name" placeholder="Patient Name" class="w-full p-2 bg-gray-800 rounded">

        <input type="date" name="date" class="w-full p-2 bg-gray-800 rounded">

        <input type="time" name="appointment_time" class="w-full p-2 bg-gray-800 rounded">

        <button class="bg-blue-500 px-4 py-2 rounded">Save</button>
        <a href="/appointments" class="bg-gray-600">back</a>
    </form>

</div>
