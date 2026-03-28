<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>


   <nav class="bg-black shadow-md p-4 flex justify-between items-center">
        <x-header/>
    </nav>


<div class="p-6 bg-gray-900 min-h-screen text-white">

    <h1 class="text-2xl mb-6">Add Doctor</h1>

    <form action="/doctors" method="POST" class="space-y-4">
        @csrf

        <input name="name" placeholder="Name" class="w-full p-2 bg-gray-800 rounded">

        <input name="specialization" placeholder="Specialization" class="w-full p-2 bg-gray-800 rounded">

        <input type="time" name="start_time" class="w-full p-2 bg-gray-800 rounded">

        <input type="time" name="end_time" class="w-full p-2 bg-gray-800 rounded">

        <input type="number" name="max_patients" placeholder="Max Patients" class="w-full p-2 bg-gray-800 rounded">

        <button class="bg-blue-500 px-4 py-2 rounded">Save</button>
<a href="/doctors" class="bg-gray-500 px-4 py-2 rounded">
    Back
</a>    </form>

</div>
</body>
</html>
