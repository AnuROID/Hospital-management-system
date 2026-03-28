<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of doctors</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <nav class="bg-black shadow-md p-4 flex justify-between items-center">
        <x-header/>
    </nav>

<div class="p-6 text-white bg-gray-900 min-h-screen">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Doctors</h1>

        <a href="/doctors/create" class="bg-blue-500 px-4 py-2 rounded">
            + Add Doctor
        </a>
    </div>

    <div class="bg-gray-800 p-4 rounded">

        <table class="w-full text-left">

            <thead>
                <tr class="border-b border-gray-600">
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Timing</th>
                    <th>Max Patients</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($doctors as $doctor)
                <tr class="border-b border-gray-700">
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>{{ $doctor->start_time }} - {{ $doctor->end_time }}</td>
                    <td>{{ $doctor->max_patients }}</td>

                    <td class="space-x-2">

                        <a href="/doctors/{{ $doctor->id }}/edit"
                           class="text-yellow-400">Edit</a>

                        <form action="/doctors/{{ $doctor->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-400">Delete</button>
                        </form>

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

</body>
</html>
