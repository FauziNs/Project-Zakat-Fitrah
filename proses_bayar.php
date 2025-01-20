<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$nama_kk = $_POST['nama_KK'];
$id_muzakki = $_POST['id_muzakki'];
$jumlah_tanggungan = $_POST['jumlah_tanggungan'];
$jenis_bayar = $_POST['jenis_bayar'];
$jumlah_tanggunganyangdibayar = $_POST['jumlah_tanggunganyangdibayar'];
if ($_POST['jenis_bayar'] == "beras") {
    $bayar_beras = $_POST['jumlah_tanggunganyangdibayar'] * 2.5;
    $bayar_uang = 0;
} else {
    $bayar_beras = 0;
    $bayar_uang = $_POST['jumlah_tanggunganyangdibayar'] * 30000;
}

//menginput data ke database 
$insert = mysqli_query($koneksi, "INSERT INTO bayarzakat (nama_KK, jumlah_tanggungan, jenis_bayar, jumlah_tanggunganyangdibayar, bayar_beras, bayar_uang) VALUES ('$nama_kk', '$jumlah_tanggungan', '$jenis_bayar', '$jumlah_tanggunganyangdibayar','$bayar_beras','$bayar_uang')");

//mengalihkan halaman kembali ke data_pengumpulan.php
header("location:pengumpulan.php");
