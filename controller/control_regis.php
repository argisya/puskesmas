<?php
function register($nama, $username, $password, $password2) {
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "puskesmas");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Query untuk memeriksa apakah username sudah ada
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username sudah terdaftar!');</script>";
        return;
    }

    if ($password !== $password2) {
        echo "<script>alert('Password tidak cocok!');</script>";
        return false;
    }
    
    // Query untuk menyimpan data pengguna baru
    $sql = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Registrasi berhasil!');</script>";
        header("Location: /puskesmas/login/login.php");
        exit();
    } else {
        echo "<script>alert('Registrasi gagal!');</script>";
    }
    // Tutup koneksi
    mysqli_close($koneksi);
}

function validatePassword($password, $password2) {
    if ($password !== $password2) {
        echo "<script>alert('Password tidak cocok!');</script>";
        return false;
    }
    return true;
}
?>