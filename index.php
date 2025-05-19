<html>
 <head>
  <title>
   PusKita Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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
 <body class="bg-white font-sans text-black">
  <div class="flex min-h-screen">
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
   <main class="flex-1 p-6">
    <p class="text-base font-semibold mb-2">
     Dashboard
    </p>
    <section class="mb-8">
     <h2 class="text-3xl font-extrabold mb-4">
      Data PusKita
     </h2>
     <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0 sm:space-x-4">
      <div class="flex space-x-4 border border-gray-300 rounded-md p-3 w-full sm:w-auto">
       <div class="w-16 h-16 bg-gray-300 rounded-md flex-shrink-0">
       </div>
       <div class="flex flex-col justify-center">
        <span class="font-semibold text-lg leading-none">
         134
        </span>
        <span class="text-xs leading-tight">
         Total Pasien
         <br/>
         Hari Ini
        </span>
       </div>
      </div>
      <div class="flex space-x-4 border border-gray-300 rounded-md p-3 w-full sm:w-auto">
       <div class="w-16 h-16 bg-gray-300 rounded-md flex-shrink-0 flex items-center justify-center">
        <img alt="Calendar icon with grid and date" class="w-10 h-10" height="40" src="https://storage.googleapis.com/a1aa/image/695f68a3-42ca-4864-679e-752c2a75aa2c.jpg" width="40"/>
       </div>
       <div class="flex flex-col justify-center">
        <span class="font-semibold text-lg leading-none">
         134
        </span>
        <span class="text-xs leading-tight">
         Total Pasien
         <br/>
         Hari Ini
        </span>
       </div>
      </div>
      <div class="flex space-x-4 border border-gray-300 rounded-md p-3 w-full sm:w-auto">
       <div class="w-16 h-16 bg-[#0078D7] rounded-md flex-shrink-0 flex items-center justify-center">
        <img alt="User icon silhouette in white on blue background" class="w-10 h-10" height="40" src="https://storage.googleapis.com/a1aa/image/242f3475-7706-423c-0285-329e5f7d1304.jpg" width="40"/>
       </div>
       <div class="flex flex-col justify-center">
        <span class="font-semibold text-lg leading-none">
         134
        </span>
        <span class="text-xs leading-tight">
         Total Pasien
         <br/>
         Hari Ini
        </span>
       </div>
      </div>
     </div>
     <button class="mt-4 sm:mt-0 sm:ml-auto flex items-center gap-2 bg-[#0078D7] text-white font-semibold rounded-md px-4 py-2 hover:bg-[#005ea2] transition-colors" type="button">
      <i class="fas fa-plus">
      </i>
      Tambah Pasien
     </button>
    </section>
    <section>
     <h2 class="text-3xl font-extrabold mb-4">
      Data Pasien
     </h2>
     <form class="mb-4 max-w-md">
      <label class="sr-only" for="search">
       Cari data pasien
      </label>
      <div class="relative">
       <input class="w-full border border-gray-300 rounded-md py-2 pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-[#0078D7]" id="search" name="search" placeholder="Cari data pasien" type="search"/>
       <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-gray-500">
        <i class="fas fa-search">
        </i>
       </div>
      </div>
     </form>
     <table class="w-full border-collapse">
      <thead>
       <tr class="bg-gray-200 text-left text-sm font-semibold">
        <th class="py-2 px-3 border border-gray-300">
         Nama
        </th>
        <th class="py-2 px-3 border border-gray-300">
         No.Rek Medis
        </th>
        <th class="py-2 px-3 border border-gray-300">
         Poli
        </th>
        <th class="py-2 px-3 border border-gray-300">
         Kelompok Pasien
        </th>
        <th class="py-2 px-3 border border-gray-300">
         Tanggal Registrasi
        </th>
       </tr>
      </thead>
      <tbody class="text-sm">
       <tr>
        <td class="py-2 px-3 border border-gray-300">
         Agus Mulyadi
        </td>
        <td class="py-2 px-3 border border-gray-300">
         67432745
        </td>
        <td class="py-2 px-3 border border-gray-300">
         Poli Umum
        </td>
        <td class="py-2 px-3 border border-gray-300">
         BPJS
        </td>
        <td class="py-2 px-3 border border-gray-300">
         29-05-2025
        </td>
       </tr>
       <tr>
        <td class="py-2 px-3 border border-gray-300">
         Agus Mulyadi
        </td>
        <td class="py-2 px-3 border border-gray-300">
         67432745
        </td>
        <td class="py-2 px-3 border border-gray-300">
         Poli Umum
        </td>
        <td class="py-2 px-3 border border-gray-300">
         BPJS
        </td>
        <td class="py-2 px-3 border border-gray-300">
         29-05-2025
        </td>
       </tr>
       <tr>
        <td class="py-2 px-3 border border-gray-300">
         Agus Mulyadi
        </td>
        <td class="py-2 px-3 border border-gray-300">
         67432745
        </td>
        <td class="py-2 px-3 border border-gray-300">
         Poli Umum
        </td>
        <td class="py-2 px-3 border border-gray-300">
         BPJS
        </td>
        <td class="py-2 px-3 border border-gray-300">
         29-05-2025
        </td>
       </tr>
       <tr>
        <td class="py-2 px-3 border border-gray-300">
         Agus Mulyadi
        </td>
        <td class="py-2 px-3 border border-gray-300">
         67432745
        </td>
        <td class="py-2 px-3 border border-gray-300">
         Poli Umum
        </td>
        <td class="py-2 px-3 border border-gray-300">
         BPJS
        </td>
        <td class="py-2 px-3 border border-gray-300">
         29-05-2025
        </td>
       </tr>
       <tr>
        <td class="py-2 px-3 border border-gray-300">
         Agus Mulyadi
        </td>
        <td class="py-2 px-3 border border-gray-300">
         67432745
        </td>
        <td class="py-2 px-3 border border-gray-300">
         Poli Umum
        </td>
        <td class="py-2 px-3 border border-gray-300">
         BPJS
        </td>
        <td class="py-2 px-3 border border-gray-300">
         29-05-2025
        </td>
       </tr>
      </tbody>
     </table>
    </section>
   </main>
  </div>
 </body>
</html>
