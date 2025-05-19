<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Arahkan ke halaman utama jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Catatan - Atur Cuan</title>
</head>
<body>
    <h1>Buat Catatan Baru</h1>
    <form action="proses_catatan.php" method="POST">
        <label for="nama_catatan">Nama Catatan:</label>
        <input type="text" id="nama_catatan" name="nama_catatan" required>
        
        <label for="ikon">Pilih Ikon:</label>
        <select id="ikon" name="ikon">
            <option value="ikon1">Ikon 1</option>
            <option value="ikon2">Ikon 2</option>
            <option value="ikon3">Ikon 3</option>
        </select>

        <button type="submit">Simpan Catatan</button>
    </form>
</body>
</html>