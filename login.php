<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'module/function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            if ($row['username'] == "admin") {
                header("Location: admin.php");
                exit;
            } else {
                header("Location: index.php");
                exit;
            }
        }
    }

    $error = true;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Akun</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
</head>

<body>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>

    <form class="" action="" method="POST">
        <div class="container">
            <h1 class="text-center">Login Akun</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Username: </label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password: </label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Konfirmasi Password: </label>
                <input type="password" class="form-control" name="password2" id="password2">
            </div>

            <button type="submit" class="btn btn-warning" name="login">Submit</button>
            <div class="mb-3 text-center">
                <p>Belum punya akun? <a href="registrasi.php">Daftar</a></p>
            </div>

    </form>
    </div>
    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffc107" fill-opacity="1" d="M0,192L21.8,202.7C43.6,213,87,235,131,213.3C174.5,192,218,128,262,133.3C305.5,139,349,213,393,234.7C436.4,256,480,224,524,218.7C567.3,213,611,235,655,224C698.2,213,742,171,785,160C829.1,149,873,171,916,165.3C960,160,1004,128,1047,144C1090.9,160,1135,224,1178,208C1221.8,192,1265,96,1309,48C1352.7,0,1396,0,1418,0L1440,0L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
    </svg>
    <Footer class="bg-warning text-center pb-2">
        <p>&copy; Copyright 2021. All Right Reserved</p>
    </Footer>
    <!-- END Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>