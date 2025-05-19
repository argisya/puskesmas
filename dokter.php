<html >
 <head>
  <title>
   Data Dokter - PusKita
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
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
 <body class="bg-white">
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
    <h2 class="text-sm font-semibold mb-1">
     Dashboard
    </h2>
    <h1 class="text-2xl font-extrabold mb-4">
     Data Dokter
    </h1>
    <form class="mb-6">
     <input class="w-full max-w-xs border border-gray-300 rounded-full py-2 px-4 text-sm focus:outline-none focus:ring-2 focus:ring-[#0D6EFD]" placeholder="Cari data dokter" type="search"/>
    </form>
    <table class="w-full border-collapse">
     <thead>
      <tr class="bg-gray-300 text-left text-sm font-semibold text-black">
       <th class="py-2 px-3">
        Nama
       </th>
       <th class="py-2 px-3">
        NIP
       </th>
       <th class="py-2 px-3">
        Spesialis
       </th>
       <th class="py-2 px-3">
        Poli
       </th>
       <th class="py-2 px-3">
        Jadwal
       </th>
      </tr>
     </thead>
     <tbody class="text-sm text-black">
      <tr class="border-b border-gray-200 align-top">
       <td class="py-3 px-3 leading-tight">
        dr. Wahyu Prasetya,
        <br/>
        Sp.PD
       </td>
       <td class="py-3 px-3">
        67432745
       </td>
       <td class="py-3 px-3">
        Penyakit Dalam
       </td>
       <td class="py-3 px-3">
        Penyakit Dalam
       </td>
       <td class="py-3 px-3">
        Senin–Rabu
       </td>
      </tr>
      <tr class="border-b border-gray-200 align-top">
       <td class="py-3 px-3 leading-tight">
        dr. Intan Rahmawati,
        <br/>
        Sp.KG
       </td>
       <td class="py-3 px-3">
        67548902
       </td>
       <td class="py-3 px-3">
        Kedokteran Gigi
       </td>
       <td class="py-3 px-3">
        Gigi
       </td>
       <td class="py-3 px-3">
        Selasa – Jumat
       </td>
      </tr>
      <tr class="border-b border-gray-200 align-top">
       <td class="py-3 px-3 leading-tight">
        dr. Bimo Kartiko,
        <br/>
        Sp.JP
       </td>
       <td class="py-3 px-3">
        67465906
       </td>
       <td class="py-3 px-3">
        Jantung &amp; Pembuluh Darah
       </td>
       <td class="py-3 px-3">
        Jantung
       </td>
       <td class="py-3 px-3">
        Senin – Kamis
       </td>
      </tr>
      <tr class="border-b border-gray-200 align-top">
       <td class="py-3 px-3 leading-tight">
        dr. Kartika Wulandari,
        <br/>
        Sp.KJ
       </td>
       <td class="py-3 px-3">
        67434389
       </td>
       <td class="py-3 px-3">
        esehatan Jiwa
       </td>
       <td class="py-3 px-3">
        Psikiatri
       </td>
       <td class="py-3 px-3">
        Rabu – Jumat
       </td>
      </tr>
      <tr class="border-b border-gray-200 align-top">
       <td class="py-3 px-3 leading-tight">
        dr. Aldi Permana, Sp.OG
       </td>
       <td class="py-3 px-3">
        67432316
       </td>
       <td class="py-3 px-3">
        Obstetri &amp; Ginekologi
       </td>
       <td class="py-3 px-3">
        Kandungan
       </td>
       <td class="py-3 px-3">
        Selasa – Kamis
       </td>
      </tr>
     </tbody>
    </table>
    <button class="mt-6 bg-[#0D6EFD] text-white text-sm font-semibold rounded-full px-5 py-2 flex items-center space-x-2 hover:bg-[#0b5ed7]" type="button">
     <i class="fas fa-chevron-down text-xs">
     </i>
     <span>
      Lihat selengkapnya
     </span>
    </button>
   </main>
  </div>
 </body>
</html>
