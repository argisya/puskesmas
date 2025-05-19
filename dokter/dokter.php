<?php
include_once('../template/sidebar.php');
include_once('../controller/control_tambah_dokter.php');

$get = get_data();
?>

   <!-- Main content -->
   <main class="flex-1 p-6">
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
        Poli
       </th>
       <th class="py-2 px-3">
        Jadwal
       </th>
      </tr>
     </thead>
     <tbody class="text-sm text-black">
      <?php
      foreach ($get as $data) {
       ?>
      <tr class="border-b border-gray-200 align-top">
       <td class="py-3 px-3 leading-tight">
        <?= $data['nama_dokter'] ?>
       </td>
       <td class="py-3 px-3">
        <?= $data['nip'] ?>
       </td>
       <td class="py-3 px-3">
        <?= $data['poli'] ?>
       </td>
       <td class="py-3 px-3">
        <?= $data['jadwal'] ?>
       </td>
      </tr>
       <?php
      }
      ?>
     </tbody>
    </table>
       <div class="flex justify-center mt-12">
    <a class="bg-[#2B7AF5] text-white font-semibold rounded-full px-6 py-2 flex items-center space-x-2 shadow-md hover:bg-[#1e5fd9] transition" href="tambah_dokter.php"><i class="fas fa-plus text-lg"></i><span>Tambah Dokter</span></a>
   </div>
   </main>

   <?php include_once('../template/footer.php') ?>