<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama_kategori     = $_POST['nama_kategori'];
  $jumlah_hak        = $_POST['jumlah_hak'];

  $query = "INSERT INTO  kategori_mustahik (nama_kategori, jumlah_hak) VALUES ('$nama_kategori', '$jumlah_hak')";
  $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='mustahik.php';</script>";
                  }
?>