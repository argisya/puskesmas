<?php
include_once('../template/sidebar.php'); 
include_once('../controller/control_tambah_dokter.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'nama_dokter' => $_POST['nama_dokter'],
        'poli' => $_POST['poli'],
        'nip' => $_POST['nip'],
        'jadwal' => $_POST['jadwal']
    ];
    
    insert_data($data);
}
?>


<div class="ml-6 p-6 bg-white rounded-lg shadow-md max-w-2xl">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Data Dokter</h2>
    
    <form action="" method="POST" class="space-y-4">
        <div class="flex flex-col">
            <label for="nama" class="text-gray-700 mb-1">Nama Dokter</label>
            <input type="text" id="nama" name="nama_dokter" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label for="no_id" class="text-gray-700 mb-1">nip</label>
            <input type="text" id="no_id" name="nip" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
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
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
                <option value="sabtu">Sabtu</option>
                <option value="minggu">Minggu</option>
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