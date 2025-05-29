<?php
function insert_data($data) {
    

$nama_dokter = $_POST['nama_dokter'];
$spesialisasi_id = $_POST['spesialisasi_id'];
$dokter_id = $_POST['dokter_id'];
$jadwal = $_POST['jadwal'];
$no_telepon = $_POST['no_telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$data = [
    'nama_dokter' => $nama_dokter,
    'spesialisasi_id' => $spesialisasi_id,
    'dokter_id' => $dokter_id,
    'jadwal' => $jadwal,
    'no_telepon' => $no_telepon,
    'jenis_kelamin' => $jenis_kelamin,
    'tanggal_lahir' => $tanggal_lahir
];

$koneksi = mysqli_connect("localhost", "root", "", "puskesmas");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO dokter (nama_dokter, spesialisasi_id, dokter_id, jadwal, no_telepon, jenis_kelamin, tanggal_lahir) VALUES ('$nama_dokter', '$spesialisasi_id', '$dokter_id', '$jadwal', '$no_telepon', '$jenis_kelamin', '$tanggal_lahir')";
if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data dokter berhasil ditambahkan!'); window.location.href='/puskesmas/dokter/dokter.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($koneksi) . "'); window.location.href='/puskesmas/dokter/dokter.php';</script>";
}

mysqli_close($koneksi);
}

// get data to dokter.php
function get_data() {
    $koneksi = mysqli_connect("localhost", "root", "", "puskesmas");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    $sql = "SELECT dokter.*, spesialisasi.nama_spesialisasi FROM dokter JOIN spesialisasi ON dokter.spesialisasi_id = spesialisasi.spesialisasi_id";
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