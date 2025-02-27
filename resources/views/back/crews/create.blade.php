@include('back.partials.head-back')

<body class="bg-gray-100">
@include('back.partials.header-back')
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold mb-6 text-center uppercase">Crear Nuevo Crew</h2>
        <form action="{{ route('crews.store') }}" method="POST" class="bg-white p-8 shadow-md rounded-lg">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Color:</label>
                <input type="color" name="color" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Slogan:</label>
                <input type="text" name="slogan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Capacidad:</label>
                <input type="number" name="capacity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Fundación:</label>
                <input type="date" name="foundation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M18.381 5.354a.75.75 0 0 1 .265 1.027l-7.087 12a.75.75 0 0 1-1.164.16L5.48 13.838a.75.75 0 0 1 1.038-1.084l4.23 4.051L17.353 5.62a.75.75 0 0 1 1.027-.265" clip-rule="evenodd"/></svg></button>
                <a href="{{ route('crews.index') }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M8 5a.53.53 0 0 0-.431.222l-3.923 5.486a1.64 1.64 0 0 0-.047 1.839L7.58 18.77A.5.5 0 0 0 8 19h11.359c.906 0 1.641-.735 1.641-1.641V6.64C21 5.735 20.265 5 19.359 5zm1.646 3.146a.5.5 0 0 1 .708 0l3.127 3.128l3.094-3.126a.5.5 0 0 1 .71.704l-3.097 3.129l3.166 3.165a.5.5 0 0 1-.708.708l-3.162-3.163l-3.129 3.16a.5.5 0 0 1-.71-.703l3.132-3.164l-3.13-3.13a.5.5 0 0 1 0-.708" clip-rule="evenodd"/></svg></a>
            </div>
        </form>
    </div>
</body>
</html>
