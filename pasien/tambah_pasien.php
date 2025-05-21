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

<div class="p-6 bg-gray-100 min-h-screen w-full">
    <div class="max-full mx-auto bg-white rounded-lg shadow-lg">
        <h2 class="bg-blue-600 text-white text-2xl font-semibold p-6 rounded-t-lg">
            Pendaftaran Pasien
        </h2>
        
        <div class="p-6">
            <form action="" method="POST" class="space-y-6">
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="space-y-2">
                        <label for="nama" class="block text-gray-700 font-medium">
                            Nama Pasien
                        </label>
                        <input type="text" id="nama" name="nama_pasien" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>

                    <div class="space-y-2">
                        <label for="no_rek_medis" class="block text-gray-700 font-medium">
                            No Rek Medis
                        </label>
                        <input type="text" id="no_rek_medis" name="no_rek_medis" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>

                    <div class="space-y-2">
                        <label for="poli" class="block text-gray-700 font-medium">
                            Pilih Poli *
                        </label>
                        <select id="poli" name="poli" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="">Pilih Poli</option>
                            <option value="Umum">Poli Umum</option>
                            <option value="Gigi">Poli Gigi</option>
                            <option value="Anak">Poli Anak</option>
                            <option value="Mata">Poli Mata</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="klmpk_pasien" class="block text-gray-700 font-medium">
                            Kelompok Pasien *
                        </label>
                        <select id="klmpk_pasien" name="klmpk_pasien" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="">Pilih Kelompok Pasien</option>
                            <option value="BPJS">BPJS</option>
                            <option value="Pribadi">Pribadi</option>
                            <option value="Asuransi">Asuransi Lain</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="layanan" class="block text-gray-700 font-medium">
                            Pilih Layanan *
                        </label>
                        <select id="layanan" name="layanan" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="">Pilih Layanan</option>
                            <option value="Rawat Jalan">Rawat Jalan</option>
                            <option value="Rawat Inap">Rawat Inap</option>
                            <option value="Medical Check Up">Medical Check Up</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="tgl" class="block text-gray-700 font-medium">
                            Tanggal Registrasi
                        </label>
                        <input type="date" id="tgl" name="tgl" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                </div>

                <div class="flex justify-end space-x-4 pt-6">
                    <a href="pasien.php" 
                        class="px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../template/footer.php') ?>