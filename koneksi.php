<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'mahasiswa';

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("koneksi gagal" . $conn->connect_error);
} //else {
    //     echo "koneksi terhubungg";
// }
