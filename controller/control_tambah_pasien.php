<?php
function insert_data($data) {
    

$nama_pasien = $_POST['nama_pasien'];
$no_rek_medis = $_POST['no_rek_medis'];
$poli = $_POST['poli'];
$klmpk_pasien = $_POST['klmpk_pasien'];
$tgl = $_POST['tgl'];
$layanan = $_POST['layanan'];

$data = [
    'nama_pasien' => $nama_pasien,
    'no_rek_medis' => $no_rek_medis,
    'poli' => $poli,
    'klmpk_pasien' => $klmpk_pasien,
    'tgl' => $tgl,
    'layanan' => $layanan
];

$koneksi = mysqli_connect("localhost", "root", "", "puskesmas");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO pasien (nama_pasien, no_rek_medis, poli, klmpk_pasien, tgl, layanan) VALUES ('$nama_pasien', '$no_rek_medis','$poli', '$klmpk_pasien', '$tgl', '$layanan')";
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
    $sql = "SELECT * FROM pasien";
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