<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestió d'Usuaris - Panell d'Administració</title>
  <!-- Meta para CSRF (útil en vistas Blade) -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
  <!-- Header -->
  <header class="bg-blue-700 text-white py-4 shadow-md">
    <div class="container mx-auto max-w-screen-lg px-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Back Office - Panell d'Administració</h1>
      <nav class="flex space-x-4 items-center">
        <a href="/usuaris" class="hover:underline">Gestió d'Usuaris</a>
        <a href="/crews" class="hover:underline">Gestió de Crews</a>
        <a href="/login" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition ml-4">Log Out</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-6">
    <h1 class="text-xl font-bold mb-4 text-gray-700">Gestió d'Usuaris</h1>

    <!-- Tabla de Usuarios -->
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="bg-gray-200 text-gray-700 uppercase">
          <tr>
            <th class="py-3 px-4">Nom</th>
            <th class="py-3 px-4">Cognom</th>
            <th class="py-3 px-4">Email</th>
            <th class="py-3 px-4">Data de Naixement</th>
            <th class="py-3 px-4">Rol</th>
            <th class="py-3 px-4">Accions</th>
          </tr>
        </thead>
        <tbody id="userTable" class="bg-white divide-y divide-gray-200">
          <!-- Aquí se cargarán dinámicamente los usuarios -->
        </tbody>
      </table>
    </div>

    <!-- Botón para mostrar el formulario -->
    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="showAddUserForm()">Afegir Usuari</button>

    <!-- Formulario para añadir un Usuario -->
    <div id="addUserForm" class="mt-6 bg-white p-6 rounded-lg shadow-md hidden">
      <h3 class="text-lg font-semibold mb-4 text-gray-700">Afegir Nou Usuari</h3>
      <form id="userForm">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="userName" class="block text-gray-600 mb-2">Nom</label>
            <input id="userName" type="text" name="name" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
          <div>
            <label for="userSurname" class="block text-gray-600 mb-2">Cognom</label>
            <input id="userSurname" type="text" name="surname" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
          <div>
            <label for="userEmail" class="block text-gray-600 mb-2">Email</label>
            <input id="userEmail" type="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
          <div>
            <label for="userBirthday" class="block text-gray-600 mb-2">Data de Naixement</label>
            <input id="userBirthday" type="date" name="birthday" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
          <div>
            <label for="userPassword" class="block text-gray-600 mb-2">Contrasenya</label>
            <input id="userPassword" type="password" name="password" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
        </div>
        <div class="mt-4 flex space-x-4">
          <button type="button" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="addUser()">Guardar</button>
          <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600" onclick="hideAddUserForm()">Cancel·lar</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      loadUsers();
    });

    async function loadUsers() {
      try {
        const response = await fetch('/api/users', {
          headers: { 'Accept': 'application/json' }
        });
        if (!response.ok) {
          throw new Error('Error al cargar los usuarios');
        }
        const users = await response.json();
        const table = document.getElementById('userTable');
        table.innerHTML = '';

        users.forEach(user => {
          table.innerHTML += `
            <tr>
              <td class="py-3 px-4">${user.name}</td>
              <td class="py-3 px-4">${user.surname}</td>
              <td class="py-3 px-4">${user.email}</td>
              <td class="py-3 px-4">${user.birthday}</td>
              <td class="py-3 px-4">${user.role}</td>
              <td class="py-3 px-4 flex space-x-2">
                <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600" onclick="editUser(${user.id})">Editar</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="deleteUser(${user.id})">Eliminar</button>
              </td>
            </tr>
          `;
        });
      } catch (error) {
        console.error(error);
        alert('Error al cargar los usuarios.');
      }
    }

    function showAddUserForm() {
      document.getElementById('addUserForm').classList.remove('hidden');
    }

    function hideAddUserForm() {
      document.getElementById('addUserForm').classList.add('hidden');
      document.getElementById('userForm').reset();
    }

    async function addUser() {
      const name     = document.getElementById('userName').value;
      const surname  = document.getElementById('userSurname').value;
      const email    = document.getElementById('userEmail').value;
      const birthday = document.getElementById('userBirthday').value;
      const password = document.getElementById('userPassword').value;

      try {
        const response = await fetch('/api/users', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          // Se elimina "role_id" para dejar que la migración asigne el valor por defecto (o se puede enviar "role": "Plain User")
          body: JSON.stringify({
            name,
            surname,
            email,
            birthday,
            password
          })
        });

        if (!response.ok) {
          const errorData = await response.json();
          throw new Error(errorData.message || 'No se ha podido crear el usuario');
        }

        alert('¡Usuari creat correctament!');
        loadUsers();
        hideAddUserForm();
      } catch (error) {
        console.error('Error:', error);
        alert('Error: ' + error.message);
      }
    }

    async function deleteUser(id) {
      try {
        const response = await fetch(`/api/users/${id}`, {
          method: 'DELETE',
          headers: {
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        });
        if (!response.ok) {
          throw new Error('Error al eliminar l\'usuari');
        }
        loadUsers();
      } catch (error) {
        console.error('Error:', error);
        alert(error.message);
      }
    }

    function editUser(id) {
      alert('Funcionalitat d\'edició encara no implementada.');
    }
  </script>
</body>
</html>
