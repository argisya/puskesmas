<?php include_once('../template/sidebar.php'); 
include_once('../controller/control_tambah_pasien.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'nama_pasien' => $_POST['nama_pasien'],
        'no_rek_medis' => $_POST['no_rek_medis'],
        'poli' => $_POST['poli'],
        'klmpk_pasien' => $_POST['klmpk_pasien'],
        'tgl' => $_POST['tgl'],
        'layanan' => $_POST['layanan']
    ];
    
    insert_data($data);
}
?>


<div class="ml-6 p-6 bg-white rounded-lg shadow-md max-w-2xl">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Data Pasien</h2>
    
    <form action="" method="POST" class="space-y-4">
        <div class="flex flex-col">
            <label for="nama" class="text-gray-700 mb-1">Nama</label>
            <input type="text" id="nama" name="nama_pasien" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label for="no_id" class="text-gray-700 mb-1">No_rek_medis</label>
            <input type="text" id="no_rek_medis" name="no_rek_medis" required
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
            <label for="jadwal" class="text-gray-700 mb-1">Kelompok Pasien</label>
            <select id="klmpk_pasien" name="klmpk_pasien" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Pilih Kelompok Pasien</option>
                <option value="bpjs">BPJS</option>
                <option value="pribadi">Pribadi</option>
                <option value="asuransi">Asuransi Lain</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label for="no_id" class="text-gray-700 mb-1">Tanggal Registrasi</label>
            <input type="date" id="tgl" name="tgl" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label for="jadwal" class="text-gray-700 mb-1">Layanan</label>
            <select id="layanan" name="layanan" required
                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Pilih Layanan</option>
                <option value="rj">Rawat Jalan</option>
                <option value="ri">Rawat Inap</option>
                <option value="mcu">Medical Check Up</option>
            </select>
        </div>

        <div class="flex gap-2">
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">
                Simpan
            </button>
            <a href="pasien.php"
                class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition-colors">
                Batal
            </a>
        </div>
    </form>
</div>

<?php include_once('../template/footer.php') ?>