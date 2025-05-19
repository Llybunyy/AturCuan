<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur Cuan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header dan menu -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#" id="loginButton" onclick="toggleLoginForm()">Masuk / Daftar</a></li>
            </ul>
        </nav>
    </header>

    <!-- Form Login (Disembunyikan) -->
    <div id="loginForm" class="login-form" style="display:none;">
        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="daftar.php">Daftar disini</a></p>
    </div>

    <!-- Konten Utama -->
    <main>
        <h1>Selamat datang di Atur Cuan</h1>
        
        <?php
        if (isset($_SESSION['username'])) {
            // Jika sudah login, tampilkan tombol buat catatan
            echo '<a href="buat_catatan.php" class="buat-catatan-btn">BUAT CATATAN ANDA</a>';
        } else {
            // Jika belum login, tampilkan pesan untuk login
            echo '<p>Silakan login untuk membuat catatan.</p>';
        }
        ?>
    </main>
    <?php include 'cek_login.php'; ?>
<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Atur Cuan - Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="proses_login.php">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</body>
</html>


    <script>
        function toggleLoginForm() {
            let form = document.getElementById('loginForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
