<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YORA Hospital</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head></head>
<body class="bg-gray-600">
    <nav class="bg-black shadow-md p-4 flex justify-between items-center">
        <x-header/>
    </nav>
   <section class="flex flex-col items-center justify-center h-[80vh] text-center px-4">
        <h2 class="text-6xl font-bold text-white mb-4">
            Welcome to YORA Hospital
        </h2>

        <p class="text-white max-w-xl mb-6">
            We provide the best healthcare services with expert doctors and modern facilities.
            Book appointments easily and manage your health with our smart hospital system.
        </p>

        <div class="space-x-4">
            <a href="/login" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                Login
            </a>
            <a href="/register" class="bg-gray-800 text-white px-6 py-2 rounded hover:bg-gray-900">
                Signup
            </a>
        </div>
    </section>
</h3>
</body>
</html>
