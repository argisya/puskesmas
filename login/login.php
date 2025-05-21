<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../login.css">
</head>
<body >
    <?php
        session_start();
        if (isset($_SESSION['user'])) {
            header("Location: index.php");
            exit();
        }
        // Cek apakah form login sudah disubmit
        // Jika sudah, ambil data username dan password
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Panggil fungsi login dari controller
            include '../controller/control_login.php';
            login($username, $password);
        }
        

    ?>
    <form action="" method="POST">
        <h1>Login</h1>
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Enter Your Username" class="glass-input">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter Your Password" class="glass-input">
        <div class="row">
            <div class="form-group">
                <input type="checkbox"/>
                <label for="checkbox">Remember me</label>
            </div>
            <a href="">Forgot password</a>
        </div>
        <button class="glass-button">Login</button>
        <label class="account-label" for="account?">Belum Punya Akun? <a href="regis.php">Register</a></label>
    </form>
</body>
</html>