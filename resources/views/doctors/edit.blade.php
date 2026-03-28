    @vite(['resources/css/app.css'])

   <nav class="bg-black shadow-md p-4 flex justify-between items-center">
        <x-header/>
    </nav>

<div class="p-6 bg-gray-900 min-h-screen text-white">

    <h1 class="text-2xl mb-6">Edit Doctor</h1>

    <form action="/doctors/{{ $doctor->id }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <input name="name" value="{{ $doctor->name }}" class="w-full p-2 bg-gray-800 rounded">

        <input name="specialization" value="{{ $doctor->specialization }}" class="w-full p-2 bg-gray-800 rounded">

        <input type="time" name="start_time" value="{{ $doctor->start_time }}" class="w-full p-2 bg-gray-800 rounded">

        <input type="time" name="end_time" value="{{ $doctor->end_time }}" class="w-full p-2 bg-gray-800 rounded">

        <input type="number" name="max_patients" value="{{ $doctor->max_patients }}" class="w-full p-2 bg-gray-800 rounded">

        <button class="bg-green-500 px-4 py-2 rounded">Update</button>
        <a href='/doctors' class="bg-gray-500 px-4 py-2 rounded">Back</a>

    </form>

</div>
