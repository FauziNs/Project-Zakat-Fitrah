<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  $kategori_fakir = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'Fakir'");
  $fakir_jumlah_hak = mysqli_fetch_assoc($kategori_fakir)['jumlah_hak'];
  $kategori_miskin = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori = 'Miskin'");
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
  $ibnusabil = mysqli_query($koneksi,"SELECT COUNT(*) AS total_ibnusabil FROM mustahik_lainnya WHERE kategori = 'Ibnu Sabil'");
  $ibnusabil = mysqli_fetch_assoc($ibnusabil);
  $amil = mysqli_query($koneksi,"SELECT COUNT(*) AS total_amil FROM mustahik_lainnya WHERE kategori = 'amil'");
  $amil = mysqli_fetch_assoc($amil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Distribusi</title>
</head>
<body>
  <p style="text-align: center; font-weight: bold; font-size: 24px;">Rekap Distribusi Zakat</p>
  <p style="text-align: right;">Tanggal Cetakan: <?php echo date('d/m/Y'); ?></p>
    <table  width="100%" border="1">
    <thead>
                <tr>
                  <th scope="col">Kategori Mustahik</th>
                  <th scope="col">Hak Beras (Kg)</th>
                  <th scope="col">Jumlah KK</th>
                  <th scope="col">Total Beras (Kg)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Fakir</td>
                  <td><?php echo $fakir_jumlah_hak; ?></td>
                  <td><?php echo $fakir['total_fakir']; ?></td>
                  <td><?php echo $fakir_jumlah_hak * $fakir['total_fakir']; ?></td>
                </tr>
                <tr>
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
</body>
</html>