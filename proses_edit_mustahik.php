<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
    $id_kategori       = $_POST['id_kategori'];
    $nama_kategori     = $_POST['nama_kategori'];
    $jumlah_hak        = $_POST['jumlah_hak'];
  
    
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE kategori_mustahik SET nama_kategori = '$nama_kategori', jumlah_hak = '$jumlah_hak'";
    $query .= "WHERE id_kategori = '$id_kategori'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='mustahik.php';</script>";
      }
?>