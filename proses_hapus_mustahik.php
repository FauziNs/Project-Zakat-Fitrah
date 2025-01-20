<?php
include 'koneksi.php';
$id_kategori = $_GET["id_kategori"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM kategori_mustahik WHERE id_kategori='$id_kategori' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='mustahik.php';</script>";
    }