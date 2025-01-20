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
                  <h4 class="card-title">Data Mustahik</h4>
                  <p class="card-description">
                    Add data <code>.table mustahik</code>
                  </p>

                  <div class="col-12">
                    <a class="btn btn-inverse-success btn-fw" href="tb_mustahik.php">Tambah Data</a>
                  </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama Kategori</th>
                          <th>Jumlah Hak</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan ID
                        $query = "SELECT * FROM kategori_mustahik ORDER BY id_kategori ASC";
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
                                <td><?php echo $row['nama_kategori']; ?></td>
                                <td><?php echo $row['jumlah_hak']; ?></td>
                                <td>
                                    <a href="edit_mustahik.php?id_kategori=<?php echo $row['id_kategori']; ?>">Edit</a> |
                                    <a href="proses_hapus_mustahik.php?id_kategori=<?php echo $row['id_kategori']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> ZAKAT <a href="#" target="_blank"> mulianiginting </a> 2023 </span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Tugas Besar <a href="#" target="_blank"> PEMROGRAMAN WEB </a> Unsil </span>
              </div>
            </div>
        </div>
        </footer>
        