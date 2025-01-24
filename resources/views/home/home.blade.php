<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Penyes App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .background-image {
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col justify-between pt-16">
<!-- Navbar -->
<nav class="bg-blue-700 text-white fixed w-full z-10 top-0">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold hover:text-blue-300">Penyes App</a>

        <!-- Links -->
        <div class="space-x-6">
            <a href="#carousel" class="text-lg hover:underline">Galeria</a>
            <a href="#activitats-horaris" class="text-lg hover:underline">Activitats</a>
            <a href="#contact" class="text-lg hover:underline">Contacta'ns</a>
            <a href="#ubicacio" class="text-lg hover:underline">Ubicació</a>
            <a href="/register" class="text-lg hover:underline">Registrarse</a>
            <a href="/login" class="text-lg hover:underline">Iniciar Session</a>
        </div>
    </div>
</nav>

    <!-- Header -->
    <header class="relative bg-blue-700 text-white">
        <div class="relative">
            <img src="./resources/imagenes/pagehome.png" alt="Header Background" class="w-full h-[500px] object-cover">
            <div class="absolute inset-0 flex flex-col justify-center items-center bg-gradient-to-b from-blue-900 via-blue-800 to-transparent text-center">
                <h1 class="text-5xl font-extrabold text-white mb-6">Viu l'Esperit de les Penyes!</h1>
                <p class="text-lg font-light max-w-2xl mx-auto text-white">Uneix-te a nosaltres i descobreix l'alegria de les activitats i esdeveniments exclusius.</p>
                <a href="#activitats-horaris" class="mt-6 px-6 py-3 bg-white text-blue-700 rounded-lg text-lg font-semibold shadow-md hover:bg-gray-100">Explora Més</a>
            </div>
        </div>
    </header>

    <!-- Section: Les Peñes En Festes -->
    <section class="section py-16 bg-light">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Les Peñes En Festes</h2>
            <div class="background-image rounded-lg shadow-md" style="background-image: url('./resources/imagenes/pagehome.png'); height: 300px;">
                <img src="./resources/imagenes/pagehome.png" alt="Les Peñes" class="hidden">
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section id="carousel" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Galeria d’Imatges</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <img src="https://via.placeholder.com/400x300" alt="Image 1" class="h-56 w-full object-cover rounded-lg shadow-md hover:scale-105 transition-transform">
                <img src="https://via.placeholder.com/400x300" alt="Image 2" class="h-56 w-full object-cover rounded-lg shadow-md hover:scale-105 transition-transform">
                <img src="https://via.placeholder.com/400x300" alt="Image 3" class="h-56 w-full object-cover rounded-lg shadow-md hover:scale-105 transition-transform">
                <img src="https://via.placeholder.com/400x300" alt="Image 4" class="h-56 w-full object-cover rounded-lg shadow-md hover:scale-105 transition-transform">
            </div>
        </div>
    </section>

    <!-- Activitats i Horaris Section -->
    <section id="activitats-horaris" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Activitats i Horaris</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl font-bold text-blue-700 mb-4">Activitats Setmanals</h3>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>Classes de ball - Dilluns i Dimecres, 18:00</li>
                        <li>Torneigs de futbol - Dimarts i Dijous, 19:00</li>
                        <li>Trobades socials - Divendres, 20:00</li>
                    </ul>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl font-bold text-blue-700 mb-4">Horaris Especials</h3>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>Esdeveniments anuals - Consulta el nostre calendari</li>
                        <li>Activitats infantils - Caps de setmana, 10:00</li>
                        <li>Sessions de relaxació - Diumenges, 17:00</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Contacta'ns</h2>
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto">
            <h3 class="text-3xl font-bold text-blue-700 mb-6 text-center">Envia'ns un Missatge</h3>
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="El teu nom" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" placeholder="El teu email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="missatge" class="block text-sm font-medium text-gray-700">Missatge</label>
                    <textarea id="missatge" name="missatge" placeholder="Escriu el teu missatge aquí" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
                <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">Enviar</button>
            </form>
        </div>
    </div>
</section>

<!-- Location Section -->
<section id="ubicacio" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Ubicació</h2>
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9163901380086!2d-0.12573568467674838!3d51.50853057963678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b334d4d52f1%3A0x2b4a5c24824d0e24!2sTrafalgar%20Square%2C%20London!5e0!3m2!1sen!2suk!4v1688412341234!5m2!1sen!2suk" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <p class="text-gray-600 mt-4 text-center">
                Ens pots trobar a Carrer Major, 123, Castelló de la Plana, 12001.
            </p>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-10">
        <div class="container mx-auto px-6 text-center">
            <p class="text-sm">&copy; 2025 Penyes App. Tots els drets reservats.</p>
        </div>
    </footer>
</body>
</html>
