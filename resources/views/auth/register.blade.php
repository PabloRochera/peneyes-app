<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Penyes App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative w-full min-h-screen overflow-hidden bg-cover bg-center" style="background-image: url('{{ asset('/fondoregistro.png') }}');">
    <!-- Overlay gris oscuro -->
    <div class="absolute inset-0 bg-gray-900 bg-opacity-70"></div>
    <!-- Contenedor central -->
    <div class="relative min-h-screen flex items-center justify-center">
        <div class="bg-gray-300 p-8 rounded-lg shadow-md w-full max-w-lg z-10">
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Create Your Account</h1>
            <form method="POST" action="/register">
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" class="mt-2 w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500 text-sm" type="text" name="name" required autofocus autocomplete="name" />
                </div>

                <!-- Surname -->
                <div class="mb-4">
                    <label for="surname" class="block text-sm font-medium text-gray-700">Surname</label>
                    <input id="surname" class="mt-2 w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500 text-sm" type="text" name="surname" required autocomplete="surname" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" class="mt-2 w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500 text-sm" type="email" name="email" required autocomplete="email" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" class="mt-2 w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500 text-sm" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" class="mt-2 w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500 text-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <!-- Footer del formulario -->
                <div class="flex items-center justify-between">
                    <a href="/login" class="text-sm text-gray-600 hover:underline">Already registered?</a>
                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 focus:outline-none">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
