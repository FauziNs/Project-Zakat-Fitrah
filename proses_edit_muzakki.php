<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
    $id_muzakki        = $_POST['id_muzakki'];
    $nama_muzakki      = $_POST['nama_muzakki'];
    $jumlah_tanggungan = $_POST['jumlah_tanggungan'];
    $keterangan        = $_POST['keterangan'];
    
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE muzakki SET nama_muzakki = '$nama_muzakki', jumlah_tanggungan = '$jumlah_tanggungan', keterangan = '$keterangan'";
    $query .= "WHERE id_muzakki = '$id_muzakki'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='muzakki.php';</script>";
      }
?>