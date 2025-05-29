<?php include_once('../template/sidebar.php') ?>
<section id="biaya" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-16">
      <h2 class="text-3xl font-semibold text-black-600 mb-3">Biaya</h2>
      <p class="text-gray-700 max-w-3xl mb-4">
        Informasi biaya pelayanan kesehatan di Puskesmas Sehat. Kami berkomitmen memberikan tarif yang transparan dan terjangkau.
      </p>
      <table class="min-w-full border border-gray-300 text-gray-700">
        <thead class="bg-black-100 text-left">
          <tr>
            <th class="px-4 py-2 border border-gray-300">Jenis Layanan</th>
            <th class="px-4 py-2 border border-gray-300">Biaya (IDR)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-black-50">
            <td class="px-4 py-2 border border-gray-300">Konsultasi Dokter Umum</td>
            <td class="px-4 py-2 border border-gray-300">50,000</td>
          </tr>
          <tr class="hover:bg-black-50 bg-white">
            <td class="px-4 py-2 border border-gray-300">Konsultasi Spesialis</td>
            <td class="px-4 py-2 border border-gray-300">150,000</td>
          </tr>
          <tr class="hover:bg-black-50">
            <td class="px-4 py-2 border border-gray-300">Rawat Inap per Hari</td>
            <td class="px-4 py-2 border border-gray-300">500,000</td>
          </tr>
          <tr class="hover:bg-black-50 bg-white">
            <td class="px-4 py-2 border border-gray-300">Rawat Jalan</td>
            <td class="px-4 py-2 border border-gray-300">75,000</td>
          </tr>
        </tbody>
      </table>
</section>

<?php include_once('../template/footer.php') ?>