<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - YORA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-800 text-white
 flex items-center justify-center h-screen">
    <div class="bg-black p-8 rounded-2xl shadow-md w-96">
        <h2 class="text-2xl font-bold text-center mb-6 text-blue-600">login</h2>
        <form id="loginForm" class="gap-2">
            <!-- <input type="text" id="name" placeholder="Name" class="w-full mb-4 p-2 border rounded"> -->
            <!-- <input type="text" id="name" placeholder="Name" class="w-full mb-4p-2 border rounded"> -->
            <input type="email" id="email" placeholder="email" class="w-full mb-4 p-2 border rounded">
            <input type="password" id="password" placeholder="password" class="w-full mb-4 p-2 border rounded">
            <button  type="submit" class="w-full bg-blue-600 py-2 rounded hover:bg-blue-500"> login</button>
            <p>already have  the acc?</p>
            <a href="/register" class=" text-blue-500"> signup</a>
        </form>
    </div>
</body>

</html>
