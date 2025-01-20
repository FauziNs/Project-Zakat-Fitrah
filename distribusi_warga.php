<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include('header.php');
?>
<div class="card-body">
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Distribusi Zakat</h1>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="card-body">
            <h5 class="card-title">Data Distribusi Zakat Warga</h5>

            <!-- Table with stripped rows -->
            <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Jumlah Hak</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan ID
                $query = "SELECT * FROM mustahik_warga ORDER BY id_mustahikwarga ASC";
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
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['kategori']; ?></td>
                    <td><?php echo $row['hak']; ?></td>
                    <td>
                        <a href="edit_dwarga.php?id_mustahikwarga=<?php echo $row['id_mustahikwarga']; ?>">Edit</a> |
                        <a href="proses_hapus_dwarga.php?id_mustahikwarga=<?php echo $row['id_mustahikwarga']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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
    </section>