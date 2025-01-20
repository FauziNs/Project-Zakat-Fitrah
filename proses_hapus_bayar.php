<?php
include 'koneksi.php';
$id_zakat = $_GET["id_zakat"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM bayarzakat WHERE id_zakat='$id_zakat' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='pengumpulan.php';</script>";
    }