<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'module/function.php';

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

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <img src="img/logo.jpeg" class="img-fluid rounded rounded-3" alt="tamagochick" width="300">
        <h1 class="display-4">TamaGoChick</h1>
        <p class="lead">Jual Ayam Banten</p>
        <!-- <button type="button" class="btn btn-light">Daftar Sekarang</button> -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L20,202.7C40,181,80,139,120,149.3C160,160,200,224,240,224C280,224,320,160,360,144C400,128,440,160,480,176C520,192,560,192,600,176C640,160,680,128,720,144C760,160,800,224,840,229.3C880,235,920,181,960,138.7C1000,96,1040,64,1080,69.3C1120,75,1160,117,1200,128C1240,139,1280,117,1320,112C1360,107,1400,117,1420,122.7L1440,128L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
        </svg>
    </section>
    <!-- END Jumbotron -->

    <!-- Tentang Kami -->
    <section id="tentang">
        <div class="container">
            <div class="row text-center mb-2">
                <div class="col">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row justify-content-center fs-5 text-center">
                    <div class="col">
                        <p>
                            TamaGoChick merupakan usaha jual ayam yang menyediakan Ayam Banten dan Ayam Caru (Upacara) dengan kulitas 100% Terbaik
                        </p>
                        <p>
                            Alamat: Jalan Damai, Desa Kayuputih, Melaka, Sukasada, Buleleng
                        </p>
                        <p>
                            No.Telp: 087765083
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f1f1b9" fill-opacity="1" d="M0,64L20,96C40,128,80,192,120,224C160,256,200,256,240,250.7C280,245,320,235,360,218.7C400,203,440,181,480,165.3C520,149,560,139,600,149.3C640,160,680,192,720,208C760,224,800,224,840,208C880,192,920,160,960,128C1000,96,1040,64,1080,74.7C1120,85,1160,139,1200,170.7C1240,203,1280,213,1320,197.3C1360,181,1400,139,1420,117.3L1440,96L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
        </svg>
    </section>
    <!-- END Tentang Kami -->

    <!-- Kualitas Kami -->
    <section id="kualitas">
        <div class="container mb-2">
            <div class="row text-center">
                <div class="col">
                    <h2>Kualitas Kami</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card"">
              <img src=" img/kualitas/chickem.png" class="card-img-top" alt="Ayam Berkualitas" />
                    <div class="card-body">
                        <p class="card-text">Ayam Dibesarkan mulai dari telur sehingga kualitas terjamin</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card"">
              <img src=" img/kualitas/food.png" class="card-img-top" alt="Pakan Terjamin" />
                <div class="card-body">
                    <p class="card-text">Pakan sangat diperhatikan sehingga kualitas ayam 100% baik</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card"">
              <img src=" img/kualitas/download.png" class="card-img-top" alt="Vaksin" />
            <div class="card-body">
                <p class="card-text">Vaksin sangat diperhatikan sehingga kesehatan ayam sangat terjamin</p>
            </div>
        </div>
        </div>
        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,149.3C192,139,240,117,288,133.3C336,149,384,203,432,234.7C480,267,528,277,576,256C624,235,672,181,720,138.7C768,96,816,64,864,90.7C912,117,960,203,1008,208C1056,213,1104,139,1152,122.7C1200,107,1248,149,1296,160C1344,171,1392,149,1416,138.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
        </svg>
    </section>
    <!-- END Kualitas Kami-->

    <!-- Produk Kami -->
    <section id="produk">
        <div class="container mb-2">
            <div class="row text-center">
                <div class="col">
                    <h2>Produk Kami</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5 mb-5">
                    <img src="img/ayam/ayam caru.jpg" class="card-img-top" alt="ayam caru">
                    <div class="card-body">
                        <h5 class="card-title">Ayam Caru (Upacara)</h5>
                        <p class="card-text">Rp. 25.000</p>
                        <p class="card-text">Ayam caru (upacara) merupakan ayam yang disediakan untuk keperluan caru atau upacara</p>
                        <a href="pesanan.php" class="btn btn-warning">Pesan</a>
                    </div>
                </div>
                <div class="col-md-5 mb-5">
                    <img src="img/ayam/ayam banten.jpg" class="card-img-top" alt="ayam banten">
                    <div class="card-body">
                        <h5 class="card-title">Ayam Banten</h5>
                        <p class="card-text">Rp. 15.000</p>
                        <p class="card-text">Ayam banten merupakan ayam yang disediakan untuk banten</p>
                        <a href="pesanan.php" class="btn btn-warning">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,149.3C192,139,240,117,288,133.3C336,149,384,203,432,234.7C480,267,528,277,576,256C624,235,672,181,720,138.7C768,96,816,64,864,90.7C912,117,960,203,1008,208C1056,213,1104,139,1152,122.7C1200,107,1248,149,1296,160C1344,171,1392,149,1416,138.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
        </svg>

    </section>
    <!-- END Produk Kami-->

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffc107" fill-opacity="1" d="M0,64L20,96C40,128,80,192,120,224C160,256,200,256,240,250.7C280,245,320,235,360,218.7C400,203,440,181,480,165.3C520,149,560,139,600,149.3C640,160,680,192,720,208C760,224,800,224,840,208C880,192,920,160,960,128C1000,96,1040,64,1080,74.7C1120,85,1160,139,1200,170.7C1240,203,1280,213,1320,197.3C1360,181,1400,139,1420,117.3L1440,96L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
    </svg>
    <Footer class="bg-warning text-center pb-2">
        <p>&copy; Copyright 2021. All Right Reserved</p>
    </Footer>
    <!-- END Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>