<?php
// Memulai session
session_start();

// Mengecek apakah form login telah di-submit
if (isset($_POST['submit'])) {
    // Menyimpan inputan username dan password ke dalam variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Membuat koneksi ke database MySQL
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "zakatfitrah"; // Ganti dengan nama database Anda
    $koneksi = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    // Mengecek apakah koneksi berhasil dibuat
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Melakukan sanitasi input
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Mengecek apakah username dan password cocok dengan data yang ada di database
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if (
        mysqli_num_rows($result) > 0
    ) {
        $user = mysqli_fetch_assoc($result);
        // Membuat session untuk menyimpan data user
        $_SESSION['id_user'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Mengalihkan user ke halaman utama setelah login berhasil
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika username atau password tidak cocok, menampilkan pesan error
        echo '<script>alert("Mohon maaf username atau password yang Anda masukkan salah."); window.location.href = "index.php";</script>';
    }

    mysqli_close($koneksi);
}