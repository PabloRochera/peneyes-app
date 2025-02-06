<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Penyes App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative w-full min-h-screen overflow-hidden bg-cover bg-center" style="background-image: url('{{ asset('/fondoregistro.png') }}');">
    <div class="absolute inset-0 bg-gray-900 bg-opacity-60"></div>
    <div class="relative min-h-screen flex items-center justify-center">
        <div class="bg-gray-200 p-8 rounded-lg shadow-md w-full max-w-lg z-10">
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Benvingut!!</h1>
            <form method="POST" action="/login">
                @csrf
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" class="mt-2 w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500 text-sm" type="email" name="email" required autofocus autocomplete="username" />
                </div>
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" class="mt-2 w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500 text-sm" type="password" name="password" required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-gray-500" name="remember">
                    <label for="remember_me" class="ml-2 text-sm text-gray-700">Remember me</label>
                </div>

                <div class="flex items-center justify-between">
                    <a href="/password/reset" class="text-sm text-gray-600 hover:underline">Forgot your password?</a>
                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 focus:outline-none">Log in</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>