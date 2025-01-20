<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include('koneksi.php');
  include('header.php');

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_zakat'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_zakat = ($_GET["id_zakat"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM bayarzakat WHERE id_zakat='$id_zakat'";
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
        echo "<script>alert('Masukkan data id.');window.location='bayar.php';</script>";
      }
?>

    <div class="container">
    <div class="card-body">
            <h4 class="card-title">Bayar Zakat</h4>
            <p class="card-description">
            Data Pengumpulan
            </p>
            <form method="POST" action="proses_edit_bayar.php">
            <input type="hidden" name="id_zakat" value="<?php echo $data['id_zakat']; ?>">
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText3" name="nama_KK" value="<?php echo $data['nama_KK']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText3" name="jumlah_tanggungan" value="<?php echo $data['jumlah_tanggungan']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputSelect" class="col-sm-2 col-form-label">Jenis Fitrah</label>
                    <div class="col-sm-10">
                        <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="jenis_bayar" value="<?php echo $data['jenis_bayar']; ?>">
                            <option hidden selected>Pilih Kategori</option>
                            <option value="beras">Beras</option>
                            <option value="uang">Uang</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText3" name="jumlah_tanggunganyangdibayar" value="<?php echo $data['jumlah_tanggunganyangdibayar']; ?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-inverse-success btn-fw">Submit</button>
            </form>
        </div>
    </div>