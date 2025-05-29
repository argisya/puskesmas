<?php include_once('template/sidebar.php'); 

// session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: /puskesmas/login/login.php");
//     exit();
// }      
?>

     <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-16">
        <section id="beranda">
            <h1 class="text-4xl font-extrabold text-black-700 mb-4">Selamat Datang di Puskesmas Sehat</h1>
            <p class="text-lg text-gray-700 max-w-3xl">
                Puskesmas Sehat hadir memberikan pelayanan kesehatan terbaik untuk masyarakat dengan fasilitas lengkap dan dokter berpengalaman.
            </p>
        </section>

        <section id="pasien">
            <h2 class="text-3xl font-semibold text-black-600 mb-3">Pasien</h2>
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
            <h2 class="text-3xl font-semibold text-black-600 mb-3">Dokter</h2>
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
            <h2 class="text-3xl font-semibold text-black-600 mb-3">Rawat Inap</h2>
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
            <h2 class="text-3xl font-semibold text-black-600 mb-3">Rawat Jalan</h2>
            <p class="text-gray-700 max-w-3xl mb-4">
                Layanan rawat jalan kami siap melayani konsultasi, pemeriksaan, dan pengobatan dengan proses cepat dan nyaman.
            </p>
            <ul class="list-disc list-inside text-gray-700 max-w-3xl space-y-1">
                <li>Jadwal konsultasi yang teratur dan mudah diakses.</li>
                <li>Pelayanan apotek onsite untuk kemudahan pasien.</li>
                <li>Program pencegahan dan kesehatan masyarakat.</li>
            </ul>
        </section>
    </main>
   <?php include_once('template/footer.php') ?> 