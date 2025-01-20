<?php
include 'koneksi.php';
$id_mustahikwarga = $_GET["id_mustahikwarga"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM mustahik_warga WHERE id_mustahikwarga='$id_mustahikwarga' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='distribusi_warga.php';</script>";
    }