<?php
  // memanggil file koneksi.php untuk membuat koneksi
include('koneksi.php');
include('header.php');

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_muzakki'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_muzakki = ($_GET["id_muzakki"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM muzakki WHERE id_muzakki='$id_muzakki'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='muzakki.php';</script>";
       }
      } else {
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        echo "<script>alert('Masukkan data id.');window.location='muzakki.php';</script>";
      }
?>

<div class="container">
 <div class="card-body">
        <h4 class="card-title">Data Muzakki</h4>
        <p class="card-description">
        Data Muzakki
        </p>
        <form method="POST" action="proses_edit_muzakki.php">
        <input name="id_muzakki" value="<?php echo $data['id_muzakki']; ?>"  hidden />
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Muzakki</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" name="nama_muzakki" value="<?php echo $data['nama_muzakki']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" name="jumlah_tanggungan" value="<?php echo $data['jumlah_tanggungan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSelect" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="keterangan">
                        <option hidden selected>Pilih Kategori</option>
                        <option value="Warga Tetap">Warga Tetap</option>
                        <option value="Warga Sementara">Warga Sementara</option>

                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-inverse-success btn-fw">Add Data</button>
        </form>
    </div>
</div>
