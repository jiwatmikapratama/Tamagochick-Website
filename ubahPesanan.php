<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'module/function.php';

$id = $_GET["id"];

$pesanan = query("SELECT * FROM pesanan WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'daftarPesanan.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal diubah!');
				//document.location.href = 'daftarPesanan.php';
			</script>
		";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Pesanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <!-- Icon -->
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Ubah Data Pemesanan</h1>

        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $pesanan["id"]; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" class="form-control" name="nama" id="nama" required value="<?= $pesanan["nama"]; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat: </label>
                <input type="alamat" class="form-control" name="alamat" id="alamat" required value="<?= $pesanan["alamat"]; ?>">
            </div>
            <div class="mb-3">
                <label for="telpon" class="form-label">telpon</label>
                <input type="telpon" class="form-control" name="telpon" id="telpon" required value="<?= $pesanan["telpon"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Pilih pesanan: </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pesanan" id="ayamcaru" require value="Ayam Caru" <?php if($pesanan['pesanan']=='ayamcaru') ?>>
                    <label class="form-check-label" for="ayamcaru">
                        Ayam Caru
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pesanan" id="ayambanten" required value="Ayam Banten" <?php if($pesanan['pesanan']=='ayambanten')?>>
                    <label class="form-check-label" for="ayambanten">
                        Ayam Banten
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah: </label>
                <input type="jumlah" class="form-control" name="jumlah" id="jumlah" required value="<?= $pesanan["jumlah"]; ?>">
            </div>

            <button type="submit" class="btn btn-warning" name="submit">Ubah data</button>
            <a href="daftarPesanan.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>