<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="../login.css">
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['user'])) {
            header("Location: index.php");
            exit();
        }
        // Cek apakah form registrasi sudah disubmit
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            
            include '../controller/control_regis.php';
            register($nama, $username, $password, $password2);

            // // Panggil fungsi register dari controller
            // include '../controller/control_regis.php';
            // if (register($username, $password, $password2)) {
            //     header("Location: login.php");
            //     exit();
            // }
        }
    ?>
    <form action="" method="POST">
        <h1>Registrasi</h1>
        <label for="">Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Input Nama Lengkap" class="glass-input">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Input Username" class="glass-input">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Input Password" class="glass-input">
        <label for="">Ulangi Password</label>
        <input type="password" name="password2" placeholder="Ulangi Password" class="glass-input">
        <button class="glass-button">Registrasi</button>
        <label class="account-label" for="account?">Sudah Punya Akun? <a href="login.php">Login</a></label>
    </form>
</body>
</html>