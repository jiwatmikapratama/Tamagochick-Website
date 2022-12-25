<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'module/function.php';

if (isset($_POST["pesan"])) {

    if (pesan($_POST) > 0) {
        echo "
			<script>
				alert('Pesanan berhasil dibuat');
				document.location.href = 'index.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Pesanan gagal dibuat');
				document.location.href = 'index.php';
			</script>
		";
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
    <title>Pemesanan Ayam</title>

</head>

<body>
    <form class="" action="" method="POST">
        <div class="container pesanan-pell">
            <h1 class="text-center">Pemesanan Ayam</h1>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat: </label>
                <input type="alamat" class="form-control" name="alamat" id="alamat">
            </div>
            <div class="mb-3">
                <label for="telpon" class="form-label">Telpon: </label>
                <input type="telpon" class="form-control" name="telpon" id="telpon">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Pilih pesanan: </label>
                <div class="form-check caru">
                    <input class="form-check-input" type="radio" name="pesanan" id="ayamcaru" value="Ayam caru">
                    <label class="form-check-label" for="ayamcaru">
                        Ayam Caru - Rp. 25.000
                    </label>
                </div>
                <div class="form-check banten">
                    <input class="form-check-input" type="radio" name="pesanan" id="ayambanten" value="Ayam banten">
                    <label class="form-check-label" for="ayambanten">
                        Ayam Banten - Rp. 15.000
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah: </label>
                <input type="jumlah" class="form-control" name="jumlah" id="jumlah">
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total: </label>
                <input type="total" class="form-control" name="total" id="total" Readonly value="0">
            </div>

            <button type="submit" class="btn btn-warning" name="pesan">Pesan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
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

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(".pesanan-pell").keyup(function() {
            if (document.getElementById('ayamcaru').checked) {
                var bill = 25000;
                var bil2 = parseInt($("#jumlah").val());
                var total = bill * bil2;
                $("#total").attr("value", total);
            } else {
                var bill = 15000;
                var bil2 = parseInt($("#jumlah").val());
                var total = bill * bil2;
                $("#total").attr("value", total);
            }


        });
    </script>

</body>

</html>