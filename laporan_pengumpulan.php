<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include('header.php');
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

<!-- partial -->
        <div class="container">
            <div class="card-body">
                  <h4 class="card-title">Laporan Pengumpulan</h4>
                    <nav>
                        <ol class="breadcrumb">
                        <li class="btn btn-inverse-success btn-fw"><a href="pdf_pengumpulan.php">pdf</a></li>
                        </ol>
                    </nav>
                    <div class="table-responsive pt-3">
                    <table class="table table-bordered">
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
                            <td><?php echo $beras['total_beras']; ?></td>
                        </tr>
                        <tr>
                            <td>Total Uang</td>
                            <td><?php echo $uang['total_uang']; ?></td>
                        </tr> 
                    </table>
                    </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        