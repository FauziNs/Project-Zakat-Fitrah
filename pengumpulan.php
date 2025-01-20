<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include('header.php');
?>
<div class="card-body">
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Pengumpulan Zakat</h1>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="card-body">
            <h5 class="card-title">Data Pengumpulan Zakat</h5>

            <!-- Table with stripped rows -->
            <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama KK</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Jenis Bayar</th>
                            <th>Jumlah Tanggungan Yang Dibayar</th>
                            <th>Beras</th>
                            <th>Uang</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM bayarzakat");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <th><?php echo $no++; ?></th>
                                <th><?php echo $d['nama_KK']; ?></th>
                                <th><?php echo $d['jumlah_tanggungan']; ?></th>
                                <th><?php echo $d['jenis_bayar']; ?></th>
                                <th><?php echo $d['jumlah_tanggunganyangdibayar']; ?></th>
                                <th><?php echo $d['bayar_beras']; ?> Kg</th>
                                <th>Rp<?= number_format($d['bayar_uang'], 0, ',', '.'); ?></th>
                                <td>
                                  <a href="edit_bayar.php?id_zakat=<?php echo $d['id_zakat']; ?>">Edit</a> |
                                  <a href="proses_hapus_bayar.php?id_zakat=<?php echo $d['id_zakat']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                </td>                    
                            </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
            </div>
        </div>
      </div>
</div>
    </section>