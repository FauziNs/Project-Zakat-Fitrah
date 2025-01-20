<?php include('header.php');
  include('koneksi.php');
?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-100 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Muzakki</h4>
                  <p class="card-description">
                    Add data <code>.table muzakki</code>
                  </p>

                  <div class="col-12">
                    <a class="btn btn-inverse-success btn-fw" href="tb_muzakki.php">Tambah Data</a>
                  </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama Muzakki</th>
                          <th>Jumlah Tanggungan</th>
                          <th>Keterangan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          // jalankan query untuk menampilkan semua data diurutkan berdasarkan ID
                          $query = "SELECT * FROM muzakki ORDER BY id_muzakki ASC";
                          $result = mysqli_query($koneksi, $query);
                          //mengecek apakah ada error ketika menjalankan query
                          if(!$result){
                              die ("Query Error: ".mysqli_errno($koneksi).
                              " - ".mysqli_error($koneksi));
                          }

                          //buat perulangan untuk element tabel dari data mahasiswa
                          $no = 1; //variabel untuk membuat nomor urut
                          // hasil query akan disimpan dalam variabel $data dalam bentuk array
                          // kemudian dicetak dengan perulangan while
                          while($row = mysqli_fetch_assoc($result))
                          {
                          ?>
                          <tr>
                              <td><?php echo $no; ?></span></td>
                              <td><?php echo $row['nama_muzakki']; ?></td>
                              <td><?php echo $row['jumlah_tanggungan']; ?></td>
                              <td><?php echo $row['keterangan']; ?></td>
                              <td>
                                  <a href="edit_muzakki.php?id_muzakki=<?php echo $row['id_muzakki']; ?>">Edit</a> |
                                  <a href="proses_hapus_muzakki.php?id_muzakki=<?php echo $row['id_muzakki']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a> |
                                  <a href="bayar.php?id_muzakki=<?php echo $row['id_muzakki']; ?>">Bayar</a> |
                                  <a href="tb_distribusi_warga.php?id_muzakki=<?php echo $row['id_muzakki']; ?>">Distribusi</a> 
                              </td>
                          </tr>                   
                          <?php
                              $no++; //untuk nomor urut terus bertambah 1
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
        <div class="card-body">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
              </div>
            </div>
          </div>
        </footer>
        