<?php include_once('../template/sidebar.php') ?>

<div class="ml-6 p-6 bg-white rounded-lg shadow-md max-w-2xl">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Data Pasien</h2>
    
    <form action="proses_tambah_dokter.php" method="POST" class="space-y-4">
        <div class="flex flex-col">
            <label for="nama" class="text-gray-700 mb-1">Nama Dokter</label>
            <input type="text" id="nama" name="nama" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label for="no_id" class="text-gray-700 mb-1">Nomor ID</label>
            <input type="text" id="no_id" name="no_id" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label for="spesial" class="text-gray-700 mb-1">Spesialisasi</label>
            <select id="spesial" name="spesial" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Pilih Spesialisasi</option>
                <option value="umum">Dokter Umum</option>
                <option value="gigi">Dokter Gigi</option>
                <option value="anak">Dokter Anak</option>
                <option value="mata">Dokter Mata</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label for="poli" class="text-gray-700 mb-1">Poli</label>
            <select id="poli" name="poli" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Pilih Poli</option>
                <option value="umum">Poli Umum</option>
                <option value="gigi">Poli Gigi</option>
                <option value="anak">Poli Anak</option>
                <option value="mata">Poli Mata</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label for="jadwal" class="text-gray-700 mb-1">Jadwal Praktik</label>
            <select id="jadwal" name="jadwal" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Pilih Jadwal</option>
                <option value="pagi">Pagi (08.00 - 12.00)</option>
                <option value="siang">Siang (13.00 - 17.00)</option>
                <option value="malam">Malam (18.00 - 21.00)</option>
            </select>
        </div>

        <div class="flex gap-2">
            <button type="submit" 
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">
                Simpan
            </button>
            <a href="dokter.php" 
                class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition-colors">
                Batal
            </a>
        </div>
    </form>
</div>

<?php include_once('../template/footer.php') ?>