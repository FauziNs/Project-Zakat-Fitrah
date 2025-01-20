<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include('koneksi.php');
  include('header.php');

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_mustahiklainnya'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_mustahiklainnya = ($_GET["id_mustahiklainnya"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM mustahik_lainnya WHERE id_mustahiklainnya='$id_mustahiklainnya'";
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
        <h4 class="card-title">Distribusi</h4>
        <p class="card-description">
        Distribusi Lainnya
        </p>
        <form method="POST" action="proses_edit_dlainnya.php">
            <input type="hidden" name="id_mustahiklainnya" value="<?php echo $data['id_mustahiklainnya']; ?>">
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $data['nama']; ?>" class="form-control" id="inputText3" name="nama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="kategori">
                        <option hidden selected>Pilih Kategori</option>
                        <option value="mualaf">Mualaf</option>
                        <option value="fisabilillah">Fisabilillah</option>
                        <option value="ibnusabil">Ibnu Sabil</option>
                        <option value="amil">Amil</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Hak</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" name="hak" value="<?php echo $data['hak']; ?>">
                </div>
            </div>


            <button type="submit" class="btn btn-inverse-success btn-fw">Submit</button>
        </form>
    </div>
</div>