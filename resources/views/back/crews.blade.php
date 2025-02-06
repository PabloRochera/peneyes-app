<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestió Penyes - Panell d'Administració</title>
  <!-- Meta para CSRF -->
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
    <h1 class="text-xl font-bold mb-4 text-gray-700">Gestió de Crews</h1>

    <!-- Tabla de Crews -->
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="bg-gray-200 text-gray-700 uppercase">
          <tr>
            <th class="py-3 px-4">Nom</th>
            <th class="py-3 px-4">Color</th>
            <th class="py-3 px-4">Slogan</th>
            <th class="py-3 px-4">Capacitat</th>
            <th class="py-3 px-4">Fundació</th>
            <th class="py-3 px-4">Accions</th>
          </tr>
        </thead>
        <tbody id="crewTable" class="bg-white divide-y divide-gray-200">
          <!-- Aquí se cargarán dinàmicament els crews -->
        </tbody>
      </table>
    </div>

    <!-- Botón para mostrar el formulario -->
    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="showAddCrewForm()">Afegir Crew</button>

    <!-- Formulario para añadir o editar un Crew -->
    <div id="addCrewForm" class="mt-6 bg-white p-6 rounded-lg shadow-md hidden">
      <h3 class="text-lg font-semibold mb-4 text-gray-700">Afegir Nou Crew</h3>
      <form id="crewForm">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="crewName" class="block text-gray-600 mb-2">Nom</label>
            <input id="crewName" type="text" name="name" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
          <div>
            <label for="crewColor" class="block text-gray-600 mb-2">Color</label>
            <input id="crewColor" type="text" name="color" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
          <div>
            <label for="crewSlogan" class="block text-gray-600 mb-2">Slogan</label>
            <input id="crewSlogan" type="text" name="slogan" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
          <div>
            <label for="crewCapacity" class="block text-gray-600 mb-2">Capacitat</label>
            <input id="crewCapacity" type="number" name="capacity" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
          <div>
            <label for="crewFoundation" class="block text-gray-600 mb-2">Fundació</label>
            <input id="crewFoundation" type="date" name="foundation" class="w-full px-4 py-2 border rounded-lg" required>
          </div>
        </div>
        <div class="mt-4 flex space-x-4">
          <button type="button" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="addCrew()">Guardar</button>
          <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600" onclick="hideAddCrewForm()">Cancel·lar</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      loadCrews();
    });

    async function loadCrews() {
      try {
        const response = await fetch('/api/crews', {
          headers: { 'Accept': 'application/json' }
        });
        if (!response.ok) {
          throw new Error('Error al cargar els crews');
        }
        const crews = await response.json();
        const table = document.getElementById('crewTable');
        table.innerHTML = '';

        crews.forEach(crew => {
          table.innerHTML += `
            <tr>
              <td class="py-3 px-4">${crew.name}</td>
              <td class="py-3 px-4">${crew.color}</td>
              <td class="py-3 px-4">${crew.slogan || ''}</td>
              <td class="py-3 px-4">${crew.capacity}</td>
              <td class="py-3 px-4">${crew.foundation}</td>
              <td class="py-3 px-4 flex space-x-2">
                <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600" onclick="editCrew(${crew.id})">Editar</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="deleteCrew(${crew.id})">Eliminar</button>
              </td>
            </tr>
          `;
        });
      } catch (error) {
        console.error(error);
        alert('Error al cargar els crews.');
      }
    }

    function showAddCrewForm() {
      document.getElementById('addCrewForm').classList.remove('hidden');
    }

    function hideAddCrewForm() {
      document.getElementById('addCrewForm').classList.add('hidden');
      document.getElementById('crewForm').reset();
    }

    async function addCrew() {
      const name       = document.getElementById('crewName').value;
      const color      = document.getElementById('crewColor').value;
      const slogan     = document.getElementById('crewSlogan').value;
      const capacity   = document.getElementById('crewCapacity').value;
      const foundation = document.getElementById('crewFoundation').value;

      try {
        const response = await fetch('/api/crews', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({ name, color, slogan, capacity, foundation })
        });
        if (!response.ok) {
          const errorData = await response.json();
          throw new Error(errorData.message || 'Error al guardar el crew');
        }
        loadCrews();
        hideAddCrewForm();
      } catch (error) {
        console.error('Error:', error);
        alert('Error: ' + error.message);
      }
    }

    async function deleteCrew(id) {
      try {
        const response = await fetch(`/api/crews/${id}`, {
          method: 'DELETE',
          headers: {
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        });
        if (!response.ok) {
          throw new Error('Error al eliminar el crew');
        }
        loadCrews();
      } catch (error) {
        console.error('Error:', error);
        alert(error.message);
      }
    }

    function editCrew(id) {
      alert('Funcionalitat d\'edició encara no implementada.');
    }
  </script>
</body>
</html>
