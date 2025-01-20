<?php
$koneksi = mysqli_connect("localhost", "root", "", "zakatfitrah");

//cek koneksi
if(mysqli_connect_errno()){
    echo"Koneksi database gagal :" .mysqli_connect_errno();
}
?>