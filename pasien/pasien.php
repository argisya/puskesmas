<?php include_once('../template/sidebar.php');
include_once('../controller/control_tambah_pasien.php'); 

$get = get_data()
?>
  <!-- Main content -->
  <main class="flex-1 p-8">
   <h2 class="text-3xl font-extrabold mb-6">
    Data Pasien
   </h2>
   <div class="flex justify-end mb-4">
    <div class="relative w-full max-w-xs">
     <input id="searchInput" class="w-full border border-gray-300 rounded-lg py-2 pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cari data pasien" type="text"/>
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
      <th class="py-2 px-3">
       Layanan
      </th>
     </tr>
    </thead>
    <tbody class="text-base text-black">
     <?php
      foreach ($get as $data) {
       ?>
      <tr class="border-b border-gray-200 align-top">
       <td class="py-3 px-3 leading-tight">
        <?= $data['nama_pasien'] ?>
       </td>
       <td class="py-3 px-3">
        <?= $data['no_rek_medis'] ?>
       </td>
       <td class="py-3 px-3">
        <?= $data['poli'] ?>
       </td>
       <td class="py-3 px-3">
        <?= $data['klmpk_pasien'] ?>
       </td>
       <td class="py-3 px-3">
        <?= $data['tgl'] ?>
       </td>
       <td class="py-3 px-3">
        <?= $data['layanan'] ?>
       </td>
      </tr>
       <?php
      }
      ?>
    </tbody>
   </table>
   <div class="flex justify-center mt-12">
    <a class="bg-[#2B7AF5] text-white font-semibold rounded-full px-6 py-2 flex items-center space-x-2 shadow-md hover:bg-[#1e5fd9] transition" href="tambah_pasien.php"><i class="fas fa-plus text-lg"></i><span>Tambah Pasien</span></a>
   </div>

<?php include_once('../template/footer.php') ?>