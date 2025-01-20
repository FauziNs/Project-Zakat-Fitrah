<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$nama_muzakki = $_POST['nama_muzakki'];
$jumlah_tanggungan = $_POST['jumlah_tanggungan'];
$keterangan = $_POST['keterangan'];

//menginput data ke database 
$insert=mysqli_query($koneksi, "insert into muzakki (nama_muzakki, jumlah_tanggungan, keterangan) values ('$nama_muzakki', '$jumlah_tanggungan', '$keterangan')");

//mengalihkan halaman kembali ke muzakki.php
header("location:muzakki.php")
?>