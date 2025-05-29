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
    
    document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const tableRows = document.querySelectorAll('tbody tr');

    searchInput.addEventListener('keyup', function() {
        const searchTerm = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const text = row.textContent.toLowerCase();
            if(text.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});
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
     <a class="nav-link" href="/puskesmas/index.php">
      Beranda
     </a>
     <a class="nav-link" href="/puskesmas/pasien/pasien.php">
      Pasien
     </a>
     <a class="nav-link" href="/puskesmas/dokter/dokter.php">
      Dokter
     </a>
     <div class="relative">
       <button onclick="toggleDropdown()" class="dropdown-btn w-full text-left nav-link font-semibold text-white flex items-center justify-between">
         Layanan
         <i class="fas fa-chevron-down text-sm ml-2"></i>
       </button>
       <div id="dropdownMenu" class="dropdown-content hidden absolute left-0 mt-2 w-full bg-[#0078D7] rounded-md shadow-lg z-10">
         <a href="/puskesmas/fasilitas_layanan/gawat_darurat.php" class="block px-4 py-2 text-sm hover:bg-[#66A6FF] rounded-t-md">Gawat Darurat</a>
         <a href="/puskesmas/fasilitas_layanan/medical_check_up.php" class="block px-4 py-2 text-sm hover:bg-[#66A6FF] rounded-t-md">Medical Check Up</a>
         <a href="/puskesmas/fasilitas_layanan/poliklinik.php" class="block px-4 py-2 text-sm hover:bg-[#66A6FF] rounded-b-md">Poliklinik</a>
         <a href="/puskesmas/fasilitas_layanan/laboraturium.php" class="block px-4 py-2 text-sm hover:bg-[#66A6FF] rounded-t-md">Laboraturium</a>
         <a href="/puskesmas/fasilitas_layanan/perawatan.php" class="block px-4 py-2 text-sm hover:bg-[#66A6FF] rounded-t-md">Perawatan Instentif</a>
         <a href="/puskesmas/fasilitas_layanan/radiologi.php" class="block px-4 py-2 text-sm hover:bg-[#66A6FF] rounded-b-md">Radiologi</a>
       </div>
     </div>
     <a class="nav-link" href="/puskesmas/tata_tertib_pasien/peraturan.php">
      Tata Tertib Pasien
     </a>
     <div class="pt-4 mt-4 border-t border-gray-300">
        <a class="nav-link bg-red-600 hover:bg-red-700 text-white text-center" href="/puskesmas/controller/control_login.php?action=logout">
          <i class="fas fa-sign-out-alt mr-2"></i>Logout
        </a>
     </div>
    </nav>
   </aside>