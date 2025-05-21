<?php include_once('template/sidebar.php'); 

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /puskesmas/login/login.php");
    exit();
}      
?>

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
         No. Rek Medis
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

   <?php include_once('template/footer.php') ?> 