<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Rumah Sakit / Puskesmas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar for dropdown */
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-thumb {
      background: #3b82f6;
      border-radius: 10px;
    }
  </style>
</head>
<body class="bg-gray-50 font-sans text-gray-800">

        <!-- Mobile menu button
        <div class="md:hidden">
          <button id="mobileMenuBtn" aria-label="Toggle menu" class="focus:outline-none">
            <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" 
              stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div> -->

    <!-- Mobile Menu -->
    <!-- <div id="mobileMenu" class="hidden md:hidden bg-white shadow-inner border-t border-gray-200">
      <a href="#beranda" class="block px-6 py-3 border-b border-gray-100 hover:bg-blue-50 text-gray-700">Beranda</a>
      <a href="#pasien" class="block px-6 py-3 border-b border-gray-100 hover:bg-blue-50 text-gray-700">Pasien</a>
      <a href="#dokter" class="block px-6 py-3 border-b border-gray-100 hover:bg-blue-50 text-gray-700">Dokter</a>
      <button id="mobileFasilitasBtn" class="w-full text-left px-6 py-3 border-b border-gray-100 hover:bg-blue-50 text-gray-700 flex items-center justify-between focus:outline-none">
        Fasilitas & Layanan
        <svg class="ml-1 h-4 w-4 fill-current transform transition-transform" id="mobileFasilitasArrow" viewBox="0 0 20 20">
          <path d="M5.5 7.5l4.5 4.5 4.5-4.5z"/>
        </svg>
      </button>
      <div id="mobileFasilitasDropdown" class="hidden bg-blue-50">
        <a href="#rawat-inap" class="block px-12 py-2 text-blue-700 hover:bg-blue-100">Rawat Inap</a>
        <a href="#rawat-jalan" class="block px-12 py-2 text-blue-700 hover:bg-blue-100">Rawat Jalan</a>
      </div>
      <a href="#biaya" class="block px-6 py-3 border-b border-gray-100 hover:bg-blue-50 text-gray-700">Biaya</a>
      <a href="#tata-tertib" class="block px-6 py-3 hover:bg-blue-50 text-gray-700">Tata Tertib</a>
    </div>
  </nav> -->

  <!-- Main Content -->
  <!-- <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-16">
    <section id="beranda">
      <h1 class="text-4xl font-extrabold text-blue-700 mb-4">Selamat Datang di Puskesmas Sehat</h1>
      <p class="text-lg text-gray-700 max-w-3xl">
        Puskesmas Sehat hadir memberikan pelayanan kesehatan terbaik untuk masyarakat dengan fasilitas lengkap dan dokter berpengalaman.
      </p>
    </section>

    <section id="pasien">
      <h2 class="text-3xl font-semibold text-blue-600 mb-3">Pasien</h2>
      <p class="text-gray-700 max-w-3xl mb-4">
        Informasi bagi pasien: pendaftaran online, jadwal kunjungan, serta panduan pelayanan kesehatan.
      </p>
      <ul class="list-disc list-inside text-gray-700 max-w-3xl space-y-1">
        <li>Prosedur pendaftaran pasien baru mudah dan cepat.</li>
        <li>Fasilitas antrian terkomputerisasi untuk efisiensi pelayanan.</li>
        <li>Pelayanan ramah dan profesional dari petugas kami.</li>
      </ul>
    </section>

    <section id="dokter">
      <h2 class="text-3xl font-semibold text-blue-600 mb-3">Dokter</h2>
      <p class="text-gray-700 max-w-3xl mb-4">
        Tim dokter kami terdiri dari berbagai spesialis dengan kompetensi tinggi dan dedikasi dalam memberikan pelayanan kesehatan.
      </p>
      <ul class="list-disc list-inside text-gray-700 max-w-3xl space-y-1">
        <li>Dokter Umum</li>
        <li>Dokter Spesialis Anak</li>
        <li>Dokter Spesialis Penyakit Dalam</li>
        <li>Dokter Gigi</li>
        <li>Dokter Kandungan</li>
      </ul>
    </section>

    <section id="rawat-inap">
      <h2 class="text-3xl font-semibold text-blue-600 mb-3">Rawat Inap</h2>
      <p class="text-gray-700 max-w-3xl mb-4">
        Fasilitas rawat inap kami menyediakan ruang yang nyaman dan perawatan terbaik untuk pasien yang membutuhkan perawatan intensif.
      </p>
      <ul class="list-disc list-inside text-gray-700 max-w-3xl space-y-1">
        <li>Kamar pasien bersih dan fasilitas lengkap.</li>
        <li>Perawatan medis 24 jam oleh tenaga profesional.</li>
        <li>Area kunjungan yang nyaman untuk keluarga pasien.</li>
      </ul>
    </section>

    <section id="rawat-jalan">
      <h2 class="text-3xl font-semibold text-blue-600 mb-3">Rawat Jalan</h2>
      <p class="text-gray-700 max-w-3xl mb-4">
        Layanan rawat jalan kami siap melayani konsultasi, pemeriksaan, dan pengobatan dengan proses cepat dan nyaman.
      </p>
      <ul class="list-disc list-inside text-gray-700 max-w-3xl space-y-1">
        <li>Jadwal konsultasi yang teratur dan mudah diakses.</li>
        <li>Pelayanan apotek onsite untuk kemudahan pasien.</li>
        <li>Program pencegahan dan kesehatan masyarakat.</li>
      </ul>
    </section>

    <section id="biaya">
      <h2 class="text-3xl font-semibold text-blue-600 mb-3">Biaya</h2>
      <p class="text-gray-700 max-w-3xl mb-4">
        Informasi biaya pelayanan kesehatan di Puskesmas Sehat. Kami berkomitmen memberikan tarif yang transparan dan terjangkau.
      </p>
      <table class="min-w-full border border-gray-300 text-gray-700">
        <thead class="bg-blue-100 text-left">
          <tr>
            <th class="px-4 py-2 border border-gray-300">Jenis Layanan</th>
            <th class="px-4 py-2 border border-gray-300">Biaya (IDR)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-blue-50">
            <td class="px-4 py-2 border border-gray-300">Konsultasi Dokter Umum</td>
            <td class="px-4 py-2 border border-gray-300">50,000</td>
          </tr>
          <tr class="hover:bg-blue-50 bg-white">
            <td class="px-4 py-2 border border-gray-300">Konsultasi Spesialis</td>
            <td class="px-4 py-2 border border-gray-300">150,000</td>
          </tr>
          <tr class="hover:bg-blue-50">
            <td class="px-4 py-2 border border-gray-300">Rawat Inap per Hari</td>
            <td class="px-4 py-2 border border-gray-300">500,000</td>
          </tr>
          <tr class="hover:bg-blue-50 bg-white">
            <td class="px-4 py-2 border border-gray-300">Rawat Jalan</td>
            <td class="px-4 py-2 border border-gray-300">75,000</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section id="tata-tertib">
      <h2 class="text-3xl font-semibold text-blue-600 mb-3">Tata Tertib</h2>
      <p class="text-gray-700 max-w-3xl mb-4">
        Berikut adalah tata tertib yang harus diikuti selama berada di Puskesmas untuk menjaga kenyamanan dan kelancaran pelayanan.
      </p>
      <ol class="list-decimal list-inside text-gray-700 max-w-3xl space-y-2">
        <li>Datang tepat waktu sesuai jadwal kunjungan.</li>
        <li>Mengikuti protokol kesehatan yang berlaku.</li>
        <li>Bersikap sopan dan menghormati tenaga medis serta pasien lain.</li>
        <li>Melaporkan kondisi kesehatan secara jelas dan jujur kepada petugas.</li>
        <li>Mengurus administrasi dengan benar dan lengkap.</li>
      </ol>
    </section>
  </main>

  <footer class="bg-white border-t border-gray-200 py-6">
    <div class="max-w-7xl mx-auto px-4 text-center text-gray-500 text-sm">
      &copy; 2024 Puskesmas Sehat. All rights reserved.
    </div>
  </footer> -->

  <!-- <script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuBtn.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      if (isHidden) {
        mobileMenu.classList.remove('hidden');
      } else {
        mobileMenu.classList.add('hidden');
      }
    });

    // Mobile dropdown toggle for Fasilitas & Layanan
    const mobileFasilitasBtn = document.getElementById('mobileFasilitasBtn');
    const mobileFasilitasDropdown = document.getElementById('mobileFasilitasDropdown');
    const mobileFasilitasArrow = document.getElementById('mobileFasilitasArrow');

    mobileFasilitasBtn.addEventListener('click', () => {
      const isHidden = mobileFasilitasDropdown.classList.contains('hidden');
      if (isHidden) {
        mobileFasilitasDropdown.classList.remove('hidden');
        mobileFasilitasArrow.classList.add('rotate-180');
      } else {
        mobileFasilitasDropdown.classList.add('hidden');
        mobileFasilitasArrow.classList.remove('rotate-180');
      }
    });

    // Accessibility: update aria-expanded for dropdown on desktop hover
    const fasilitasBtn = document.getElementById('fasilitasBtn');
    const fasilitasDropdown = document.getElementById('fasilitasDropdown');

    fasilitasBtn.addEventListener('mouseenter', () => {
      fasilitasBtn.setAttribute('aria-expanded', 'true');
      fasilitasDropdown.classList.remove('hidden');
    });
    fasilitasBtn.addEventListener('mouseleave', () => {
      fasilitasBtn.setAttribute('aria-expanded', 'false');
      fasilitasDropdown.classList.add('hidden');
    });
    fasilitasDropdown.addEventListener('mouseenter', () => {
      fasilitasBtn.setAttribute('aria-expanded', 'true');
      fasilitasDropdown.classList.remove('hidden');
    });
    fasilitasDropdown.addEventListener('mouseleave', () => {
      fasilitasBtn.setAttribute('aria-expanded', 'false');
      fasilitasDropdown.classList.add('hidden');
    });
  </script> -->
</body>
</html>

