<html>
 <head>
  <title>
   Pasien - PusKita
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
    .nav-link {
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      transition: background-color 0.2s;
    }
    .nav-link:hover {
      background-color: #66A6FF;
    }
  </style>
    <script>
    function toggleDropdown() {
      const dropdown = document.getElementById('dropdownMenu');
      dropdown.classList.toggle('hidden');
    }

    // Close dropdown when clicking outside
    window.onclick = function(event) {
      if (!event.target.matches('.dropdown-btn')) {
        const dropdowns = document.getElementsByClassName('dropdown-content');
        for (let i = 0; i < dropdowns.length; i++) {
          const openDropdown = dropdowns[i];
          if (!openDropdown.classList.contains('hidden')) {
            openDropdown.classList.add('hidden');
          }
        }
      }
    }
  </script>
 </head>
 <body class="bg-white min-h-screen flex">
  <!-- Sidebar -->
    <aside class="bg-[#0078D7] w-56 flex flex-col p-6 space-y-6 text-white select-none">
    <div>
     <h1 class="font-extrabold text-3xl leading-none mb-1">
      PusKita
     </h1>
     <p class="text-sm font-normal leading-tight">
      Pusat Informasi
      <br/>
      Kesehatan Kita
     </p>
    </div>
    <nav class="flex flex-col space-y-3 text-lg font-semibold">
     <a class="nav-link" href="index.php">
      Beranda
     </a>
     <a class="nav-link" href="pasien.php">
      Pasien
     </a>
     <a class="nav-link" href="dokter.php">
      Dokter
     </a>
     <div class="relative">
       <button onclick="toggleDropdown()" class="dropdown-btn w-full text-left nav-link font-semibold text-white flex items-center justify-between">
         Fasilitas & Layanan
         <i class="fas fa-chevron-down text-sm ml-2"></i>
       </button>
       <div id="dropdownMenu" class="dropdown-content hidden absolute left-0 mt-2 w-full bg-[#0078D7] rounded-md shadow-lg z-10">
         <a href="rawat-jalan.php" class="block px-4 py-2 text-sm hover:bg-[#66A6FF] rounded-t-md">Rawat Jalan</a>
         <a href="rawat-inap.php" class="block px-4 py-2 text-sm hover:bg-[#66A6FF] rounded-b-md">Rawat Inap</a>
       </div>
     </div>
     <a class="nav-link" href="peraturan.php">
      Peraturan
     </a>
    </nav>
   </aside>
  <!-- Main content -->
  <main class="flex-1 p-8">
   <p class="text-sm font-semibold mb-1">
    Dashboard
   </p>
   <h2 class="text-3xl font-extrabold mb-6">
    Data Pasien
   </h2>
   <div class="flex justify-end mb-4">
    <div class="relative w-full max-w-xs">
     <input class="w-full border border-gray-300 rounded-lg py-2 pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cari data pasien" type="text"/>
     <span class="absolute inset-y-0 left-3 flex items-center text-gray-500">
      <i class="fas fa-search">
      </i>
     </span>
    </div>
   </div>
   <table class="w-full text-left border-collapse">
    <thead>
     <tr class="bg-gray-300 text-sm font-semibold text-gray-800">
      <th class="py-2 px-3">
       Nama
      </th>
      <th class="py-2 px-3">
       No.Rek Medis
      </th>
      <th class="py-2 px-3">
       Poli
      </th>
      <th class="py-2 px-3">
       Kelompok Pasien
      </th>
      <th class="py-2 px-3">
       Tanggal Registrasi
      </th>
     </tr>
    </thead>
    <tbody class="text-base text-black">
     <tr>
      <td class="py-2 px-3">
       Agus Mulyadi
      </td>
      <td class="py-2 px-3">
       67432745
      </td>
      <td class="py-2 px-3">
       Poli Umum
      </td>
      <td class="py-2 px-3">
       BPJS
      </td>
      <td class="py-2 px-3">
       29-05-2025
      </td>
     </tr>
     <tr>
      <td class="py-2 px-3">
       Agus Mulyadi
      </td>
      <td class="py-2 px-3">
       67432745
      </td>
      <td class="py-2 px-3">
       Poli Umum
      </td>
      <td class="py-2 px-3">
       BPJS
      </td>
      <td class="py-2 px-3">
       29-05-2025
      </td>
     </tr>
     <tr>
      <td class="py-2 px-3">
       Agus Mulyadi
      </td>
      <td class="py-2 px-3">
       67432745
      </td>
      <td class="py-2 px-3">
       Poli Umum
      </td>
      <td class="py-2 px-3">
       BPJS
      </td>
      <td class="py-2 px-3">
       29-05-2025
      </td>
     </tr>
     <tr>
      <td class="py-2 px-3">
       Agus Mulyadi
      </td>
      <td class="py-2 px-3">
       67432745
      </td>
      <td class="py-2 px-3">
       Poli Umum
      </td>
      <td class="py-2 px-3">
       BPJS
      </td>
      <td class="py-2 px-3">
       29-05-2025
      </td>
     </tr>
     <tr>
      <td class="py-2 px-3">
       Agus Mulyadi
      </td>
      <td class="py-2 px-3">
       67432745
      </td>
      <td class="py-2 px-3">
       Poli Umum
      </td>
      <td class="py-2 px-3">
       BPJS
      </td>
      <td class="py-2 px-3">
       29-05-2025
      </td>
     </tr>
    </tbody>
   </table>
   <div class="flex justify-center mt-12">
    <button class="bg-[#2B7AF5] text-white font-semibold rounded-full px-6 py-2 flex items-center space-x-2 shadow-md hover:bg-[#1e5fd9] transition">
     <i class="fas fa-plus text-lg">
     </i>
     <span>
      Tambah Pasien
     </span>
    </button>
   </div>
  </main>
 </body>
</html>
