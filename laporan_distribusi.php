<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include('header.php');
  $kategori_fakir = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'fakir'");
  $fakir_jumlah_hak = mysqli_fetch_assoc($kategori_fakir)['jumlah_hak'];
  $kategori_miskin = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'miskin'");
  $miskin_jumlah_hak = mysqli_fetch_assoc($kategori_miskin)['jumlah_hak'];
  $kategori_mampu = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'Mampu'");
  $mampu_jumlah_hak = mysqli_fetch_assoc($kategori_mampu)['jumlah_hak'];
  $kategori_mualaf = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'Mualaf'");
  $mualaf_jumlah_hak = mysqli_fetch_assoc($kategori_mualaf)['jumlah_hak'];
  $kategori_fisabilillah = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'Fisabilillah'");
  $fisabilillah_jumlah_hak = mysqli_fetch_assoc($kategori_fisabilillah)['jumlah_hak'];
  $kategori_ibnusabil = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'Ibnu Sabil'");
  $ibnusabil_jumlah_hak = mysqli_fetch_assoc($kategori_ibnusabil)['jumlah_hak'];
  $kategori_amil = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'Amil'");
  $amil_jumlah_hak = mysqli_fetch_assoc($kategori_amil)['jumlah_hak'];
  $beras = mysqli_query($koneksi,"SELECT SUM(bayar_beras) AS total_beras FROM bayarzakat" );
  $beras = mysqli_fetch_assoc($beras);
  $fakir = mysqli_query($koneksi,"SELECT COUNT(*) AS total_fakir FROM mustahik_warga WHERE kategori = 'Fakir'");
  $fakir = mysqli_fetch_assoc($fakir);
  $miskin = mysqli_query($koneksi,"SELECT COUNT(*) AS total_miskin FROM mustahik_warga WHERE kategori = 'Miskin'");
  $miskin = mysqli_fetch_assoc($miskin);
  $mampu = mysqli_query($koneksi,"SELECT COUNT(*) AS total_mampu FROM mustahik_warga WHERE kategori = 'Mampu'");
  $mampu = mysqli_fetch_assoc($mampu);
  $mualaf = mysqli_query($koneksi,"SELECT COUNT(*) AS total_mualaf FROM mustahik_lainnya WHERE kategori = 'Mualaf'");
  $mualaf = mysqli_fetch_assoc($mualaf);
  $fisabilillah = mysqli_query($koneksi,"SELECT COUNT(*) AS total_fisabilillah FROM mustahik_lainnya WHERE kategori = 'Fisabilillah'");
  $fisabilillah = mysqli_fetch_assoc($fisabilillah);
  $ibnusabil = mysqli_query($koneksi,"SELECT COUNT(*) AS total_ibnusabil FROM mustahik_lainnya WHERE kategori = 'ibnusabil'");
  $ibnusabil = mysqli_fetch_assoc($ibnusabil);
  $amil = mysqli_query($koneksi,"SELECT COUNT(*) AS total_amil FROM mustahik_lainnya WHERE kategori = 'amil'");
  $amil = mysqli_fetch_assoc($amil);
?>

        <div class="container">
            <div class="card-body">
                  <h4 class="card-title">Laporan Distribusi</h4>
                    <nav>
                        <ol class="breadcrumb">
                        <li class="btn btn-inverse-success btn-fw"><a href="pdf_distribusi.php">pdf</a></li>
                        </ol>
                    </nav>
                    <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Kategori Mustahik</th>
                        <th scope="col">Hak Beras</th>
                        <th scope="col">Jumlah KK</th>
                        <th scope="col">Total Beras</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fakir</td>
                            <td><?php echo $fakir_jumlah_hak; ?></td>
                            <td><?php echo $fakir['total_fakir']; ?></td>
                            <td><?php echo $fakir_jumlah_hak * $fakir['total_fakir']; ?></td>
                        </tr>
                            <td>Miskin</td>
                            <td><?php echo $miskin_jumlah_hak; ?></td>
                            <td><?php echo $miskin['total_miskin']; ?></td>
                            <td><?php echo $miskin_jumlah_hak * $miskin['total_miskin']; ?></td>
                        </tr>
                        <tr>
                            <td>Mampu</td>
                            <td><?php echo $mampu_jumlah_hak; ?></td>
                            <td><?php echo $mampu['total_mampu']; ?></td>
                            <td><?php echo $mampu_jumlah_hak * $mampu['total_mampu']; ?></td>
                        </tr>
                        <tr>
                            <td>Mualaf</td>
                            <td><?php echo $mualaf_jumlah_hak; ?></td>
                            <td><?php echo $mualaf['total_mualaf']; ?></td>
                            <td><?php echo $mualaf_jumlah_hak * $mualaf['total_mualaf']; ?></td>
                        </tr>
                        <tr>
                            <td>Fisabilillah</td>
                            <td><?php echo $fisabilillah_jumlah_hak; ?></td>
                            <td><?php echo $fisabilillah['total_fisabilillah']; ?></td>
                            <td><?php echo $fisabilillah_jumlah_hak * $fisabilillah['total_fisabilillah']; ?></td>
                        </tr>
                        <tr>
                            <td>Ibnu Sabil</td>
                            <td><?php echo $ibnusabil_jumlah_hak; ?></td>
                            <td><?php echo $ibnusabil['total_ibnusabil']; ?></td>
                            <td><?php echo $ibnusabil_jumlah_hak * $ibnusabil['total_ibnusabil']; ?></td>
                        </tr>
                        <tr>
                            <td>Amil</td>
                            <td><?php echo $amil_jumlah_hak; ?></td>
                            <td><?php echo $amil['total_amil']; ?></td>
                            <td><?php echo $amil_jumlah_hak * $amil['total_amil']; ?></td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
            </div>
        </div>