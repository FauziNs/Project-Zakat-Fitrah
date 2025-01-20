<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  $tot_muzakki = mysqli_query($koneksi,"SELECT COUNT(*) AS total_muzakki FROM muzakki");
  $tot_muzakki = mysqli_fetch_assoc($tot_muzakki);
  $tot_bayar = mysqli_query($koneksi, "SELECT COUNT(*) AS total_bayar FROM bayarzakat");
  $tot_bayar = mysqli_fetch_assoc($tot_bayar);
  $tanggungan = mysqli_query($koneksi, "SELECT SUM(jumlah_tanggungan) AS total_tanggungan FROM muzakki");
  $tanggungan = mysqli_fetch_assoc($tanggungan);
  $beras = mysqli_query($koneksi,"SELECT SUM(bayar_beras) AS total_beras FROM bayarzakat" );
  $beras = mysqli_fetch_assoc($beras);
  $uang  = mysqli_query($koneksi,"SELECT SUM(bayar_uang) AS total_uang FROM bayarzakat" );
  $uang  = mysqli_fetch_assoc($uang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengumpulan</title>
</head>
<body>
  <p style="text-align: center; font-weight: bold; font-size: 24px;">Rekap Pengumpulan Zakat</p>
  <p style="text-align: right;">Tanggal Cetakan: <?php echo date('d/m/Y'); ?></p>
    <table  width="100%" border="1">
        <tr>
          <td>Total Muzakki</td>
          <td><?php echo $tot_muzakki['total_muzakki']; ?></td>
        </tr>
        <tr>
          <td>Total Sudah Bayar</td>
          <td><?php echo $tot_bayar['total_bayar']; ?></td>
        </tr> 
        <tr>
          <td>Total Jiwa</td>
          <td><?php echo $tanggungan['total_tanggungan']; ?></td>
        </tr> 
        <tr>
          <td>Total Beras</td>
          <td><?php echo $beras['total_beras']; ?> Kg</td>
        </tr>
        <tr>
          <td>Total Uang</td>
          <td>Rp <?php echo number_format($uang['total_uang'], 0, ",", "."); ?></td>
        </tr> 
    </table>
</body>
</html>