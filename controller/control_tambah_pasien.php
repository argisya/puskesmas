<?php
function insert_data($data) {
    

$nama_pasien = $_POST['nama_pasien'];
$pasien_id = $_POST['pasien_id'];
$spesialisasi_id = $_POST['spesialisasi_id'];
$kelompok_pasien = $_POST['kelompok_pasien'];
$tanggal_regis = $_POST['tanggal_regis'];
$layanan = $_POST['layanan'];

$data = [
    'nama_pasien' => $nama_pasien,
    'pasien_id' => $pasien_id,
    'spesialisasi_id' => $spesialisasi_id,
    'kelompok_pasien' => $kelompok_pasien,
    'tanggal_regis' => $tanggal_regis,
    'layanan' => $layanan
];

$koneksi = mysqli_connect("localhost", "root", "", "puskesmas");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO pasien (nama_pasien, pasien_id, spesialisasi_id, kelompok_pasien, tanggal_regis, layanan) VALUES ('$nama_pasien', '$pasien_id','$spesialisasi_id', '$kelompok_pasien', '$tanggal_regis', '$layanan')";
if(mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data pasien berhasil ditambahkan!'); window.location.href='/puskesmas/pasien/pasien.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($koneksi) . "'); window.location.href='/puskesmas/pasien/pasien.php';</script>";
}

mysqli_close($koneksi);
}

// get data to dokter.php
function get_data() {
    $koneksi = mysqli_connect("localhost", "root", "", "puskesmas");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    $sql = "SELECT pasien.*, spesialisasi.nama_spesialisasi FROM pasien JOIN spesialisasi ON pasien.spesialisasi_id = spesialisasi.spesialisasi_id";
    $result = mysqli_query($koneksi, $sql);
    $data = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($koneksi);
    return $data;
}
?>