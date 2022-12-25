<?php
$conn = mysqli_connect("localhost", "root", "", "db_tamagochick");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES(NULL, '$username', '$password')");

    return mysqli_affected_rows($conn);
}

function pesan($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telpon = htmlspecialchars($data["telpon"]);
    $pesanan = htmlspecialchars($data["pesanan"]);
    $jumlah = $data["jumlah"];
    $total = $data["total"];

    $query = "INSERT INTO pesanan
				VALUES
			  (NULL, '$nama', '$alamat', '$telpon', '$pesanan', '$jumlah', '$total')
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pesanan WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telpon = htmlspecialchars($data["telpon"]);
    $pesanan = htmlspecialchars($data["pesanan"]);
    $jumlah = $data["jumlah"];

    $query = "UPDATE pesanan SET
				nama = '$nama',
				alamat = '$alamat',
				telpon = '$telpon',
				pesanan = '$pesanan',
				jumlah = '$jumlah'
			  WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
