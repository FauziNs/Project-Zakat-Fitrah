<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
    $id_zakat                     = $_POST['id_zakat'];
    $nama_KK                      = $_POST['nama_KK'];
    $jumlah_tanggungan            = $_POST['jumlah_tanggungan'];
    $jenis_bayar                  = $_POST['jenis_bayar'];
    $jumlah_tanggunganyangdibayar = $_POST['jumlah_tanggunganyangdibayar'];
    if ($_POST['jenis_bayar'] == "beras") {
      $bayar_beras = $_POST['jumlah_tanggunganyangdibayar'] * 2.5;
      $bayar_uang = 0;
  } else {
      $bayar_beras = 0;
      $bayar_uang = $_POST['jumlah_tanggunganyangdibayar'] * 30000;
  }
   
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE bayarzakat SET nama_KK='$nama_KK', jumlah_tanggungan='$jumlah_tanggungan', jenis_bayar='$jenis_bayar',  jumlah_tanggunganyangdibayar='$jumlah_tanggunganyangdibayar',
    bayar_beras='$bayar_beras', bayar_uang='$bayar_uang'";
    $query .= "WHERE id_zakat = '$id_zakat'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='pengumpulan.php';</script>";
      }
?>