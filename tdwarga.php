<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
    $id_mustahikwarga   = $_POST['id_mustahikwarga'];
    $nama               = $_POST['nama'];
    $kategori           = $_POST['kategori'];
    $hak                = $_POST['hak'];

  $query = "INSERT INTO  mustahik_warga(id_mustahikwarga, nama, kategori, hak) 
            VALUES ('$id_mustahikwarga', '$nama', '$kategori', '$hak')";
  $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='distribusi_warga.php';</script>";
                  }
?>