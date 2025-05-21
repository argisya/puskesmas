<?php

function login($username, $password) {
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "puskesmas");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    // Query untuk memeriksa username dan password
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Jika ada hasil, simpan data pengguna ke dalam session
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user;
        header("Location: /puskesmas/index.php");
        exit();
    } else {
        // Jika tidak ada hasil, tampilkan pesan kesalahan
        echo "<script>alert('Username atau password salah!');</script>";
    }
    // Tutup koneksi
    mysqli_close($koneksi);
}

function logout() {
    // Hapus session
    session_start();
    session_unset();
    session_destroy();
    header("Location: /puskesmas/login/login.php");
    exit();
}   

// Add this at the end of the file
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    logout();
}
?>