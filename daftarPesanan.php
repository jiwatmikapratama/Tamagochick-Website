<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'module/function.php';
$pesanan = query("SELECT * FROM pesanan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <title>TamaGoChick</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">

</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-warning shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.jpeg" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
                TamaGoChick
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kualitas">Kualitas Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk Kami</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->
    <div class="container mt-5">
        <h1 class="text-center">Data Pemesanan Ayam</h1>
        <table class="table">
            <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telpon</th>
                    <th scope="col">Pesanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php $i = 1; ?>
                <?php foreach ($pesanan as $row) : ?>
                    <tr>
                        <th><?= $i; ?></th>
                        <td>
                            <a class="btn btn-success" href="ubahPesanan.php?id=<?= $row["id"]; ?>">Ubah</a>
                            <a class="btn btn-danger" href="hapusPesanan.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
                        </td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td><?= $row["telpon"]; ?></td>
                        <td><?= $row["pesanan"]; ?></td>
                        <td><?php
                            if ($row["pesanan"] == "Ayam Caru") {
                                echo 25000;
                            } else {
                                echo 15000;
                            }

                            ?></td>
                        <td><?= $row["jumlah"]; ?></td>
                        <td><?php
                             if ($row["pesanan"] == "Ayam Caru") {
                                echo 25000* $row["jumlah"];;
                            } else {
                                echo 15000*  $row["jumlah"];;
                            }
                        ?></td>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="admin.php" class="btn btn-warning">Kembali</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>