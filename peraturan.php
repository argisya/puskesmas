<html >
 <head>
  <title>
   Fasilitas & Layanan - PusKita
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
  </div>
 </body>
</html>
