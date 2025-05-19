<?php
function insert_data($data) {
    

$nama_dokter = $_POST['nama_dokter'];
$poli = $_POST['poli'];
$nip = $_POST['nip'];
$jadwal = $_POST['jadwal'];

$data = [
    'nama_dokter' => $nama_dokter,
    'poli' => $poli,
    'nip' => $nip,
    'jadwal' => $jadwal
];

$koneksi = mysqli_connect("localhost", "root", "", "puskesmas");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO dokter (nama_dokter, poli, nip, jadwal) VALUES ('$nama_dokter', '$poli', '$nip', '$jadwal')";
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
    $sql = "SELECT * FROM dokter";
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