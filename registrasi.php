<?php
require 'module/function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
				alert('User baru berhasil ditambahkan!');
                document.location.href = 'login.php';
			  </script>";
    } else {
        echo mysqli_error($conn);
    }
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
    <!-- Icon -->
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <title>Registerasi Akun</title>
</head>

<body>
    <form class="" action="" method="POST">
        <div class="container">
            <h1 class="text-center">Registrasi Akun</h1>
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

            <button type="submit" class="btn btn-warning" name="register">Submit</button>
            <div class="mb-3 text-center">
                <p>Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
    </form>
    </div>

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffc107" fill-opacity="1" d="M0,96L21.8,80C43.6,64,87,32,131,64C174.5,96,218,192,262,208C305.5,224,349,160,393,160C436.4,160,480,224,524,224C567.3,224,611,160,655,154.7C698.2,149,742,203,785,192C829.1,181,873,107,916,106.7C960,107,1004,181,1047,181.3C1090.9,181,1135,107,1178,85.3C1221.8,64,1265,96,1309,106.7C1352.7,117,1396,107,1418,101.3L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
    </svg>
    <Footer class="bg-warning text-center pb-2">
        <p>&copy; Copyright 2021. All Right Reserved</p>
    </Footer>
    <!-- END Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>