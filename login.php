<?php
session_start();

if (isset($_POST['btnlogin'])) {

    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";

    $hasil = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($hasil);
    $baris = mysqli_num_rows($hasil);

    if ($baris > 0) {

        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['login'] = 'true';

        Header("location:dashboard.php");
    } else {
        echo "gagal tersambung";
    }
}
