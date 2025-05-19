<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
} else {
    echo "<script>alert('Username atau password salah'); window.location.href='index.php';</script>";
}
?>
