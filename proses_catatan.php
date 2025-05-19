<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Arahkan ke halaman utama jika belum login
    exit();
}

// Ambil data dari form
$nama_catatan = $_POST['nama_catatan'];
$ikon = $_POST['ikon'];

// Simpan ke database
include 'koneksi.php'; // Pastikan sudah ada koneksi ke database

$sql = "INSERT INTO catatan (username, nama_catatan, ikon) VALUES ('" . $_SESSION['username'] . "', '$nama_catatan', '$ikon')";
if (mysqli_query($koneksi, $sql)) {
    echo "Catatan berhasil dibuat!";
} else {
    echo "Gagal menyimpan catatan: " . mysqli_error($koneksi);
}
?>