<?php
include_once('../template/sidebar.php'); 
include_once('../controller/control_tambah_dokter.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'nama_dokter' => $_POST['nama_dokter'],
        'spesialisasi_id' => $_POST['spesialisasi_id'],
        'dokter_id' => $_POST['dokter_id'],
        'jadwal' => $_POST['jadwal'],
        'no_telepon' => $_POST['no_telepon'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'tanggal_lahir' => $_POST['tanggal_lahir']
    ];
    
    insert_data($data);
}
?>


<div class="p-6 bg-gray-100 min-h-screen w-full">
    <div class="max-full mx-auto bg-white rounded-lg shadow-lg">
        <h2 class="bg-blue-600 text-white text-2xl font-semibold p-6 rounded-t-lg">Tambah Data Dokter</h2>
        
        <div class="p-6">
            <form action="" method="POST" class="space-y-4">
                <div class="grid md:grid-cols-2 gap-6">    
                    <div class="space-y-2">
                        <label for="nama" class="block text-gray-700 font-medium">Nama Dokter</label>
                        <input type="text" id="nama" name="nama_dokter" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>

                    <div class="space-y-2">
                        <label for="no_id" class="block text-gray-700 font-medium">dokter_id</label>
                        <input type="text" id="no_id" name="dokter_id" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>

                    <div class="space-y-2">
                        <label for="spesialisasi_id" class="block text-gray-700 font-medium">Spesialisasi</label>
                        <select id="spesialisasi_id" name="spesialisasi_id" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="">Pilih Spesialisasi</option>
                            <option value="11">Poli Umum</option>
                            <option value="12">Poli Gigi</option>
                            <option value="14">Poli Anak</option>
                            <option value="13">Poli Mata</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="jadwal" class="block text-gray-700 font-medium">Jadwal Praktik</label>
                        <select id="jadwal" name="jadwal" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="">Pilih Jadwal</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="no_telepon" class="block text-gray-700 font-medium">No Telepon</label>
                        <input type="text" id="no_telepon" name="no_telepon" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>

                    <div class="space-y-2">
                        <label for="jenis_kelamin" class="block text-gray-700 font-medium">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="tanggal_lahir" class="block text-gray-700 font-medium">
                            Tanggal Lahir
                        </label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>

                    <div class="flex gap-2">
                        <button type="submit" 
                            class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition-colors">
                            Simpan
                        </button>
                        <a href="dokter.php" 
                            class="bg-gray-500 text-white px-6 py-2 rounded-md hover:bg-gray-600 transition-colors">
                            Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../template/footer.php') ?>