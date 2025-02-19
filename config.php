<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kms";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("❌ Gagal terhubung ke database: " . mysqli_connect_error());
} else {
    echo "✅ Berhasil terhubung ke database!";
}
?>