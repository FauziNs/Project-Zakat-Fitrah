<?php
include 'koneksi.php';
$id_mustahiklainnya = $_GET["id_mustahiklainnya"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM mustahik_lainnya WHERE id_mustahiklainnya='$id_mustahiklainnya' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='distribusi_lainnya.php';</script>";
    }