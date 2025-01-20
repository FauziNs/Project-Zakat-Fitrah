<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include('koneksi.php');
  include('header.php');

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_kategori'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_kategori = ($_GET["id_kategori"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kategori_mustahik WHERE id_kategori='$id_kategori'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='mustahik.php';</script>";
       }
      } else {
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        echo "<script>alert('Masukkan data id.');window.location='mustahik.php';</script>";
      }         
?>

<div class="container">
 <div class="card-body">
        <h4 class="card-title">Data Muzakki</h4>
        <p class="card-description">
        Data Muzakki
        </p>
        <form method="POST" action="proses_edit_mustahik.php">
        <input name="id_kategori" value="<?php echo $data['id_kategori']; ?>"  hidden />
            <div class="row mb-3">
                <label for="inputSelect" class="col-sm-2 col-form-label">Nama Kategori</label>
                <div class="col-sm-10">
                    <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="nama_kategori">
                        <option hidden selected>Pilih Kategori</option>
                        <option value="Fakir">Fakir</option>
                        <option value="Miskin">Miskin</option>
                        <option value="mampu">Mampu</option>
                        <option value="Mualaf">Mualaf</option>
                        <option value="Fisabilillah">Fisabilillah</option>
                        <option value="Ibnu Sabil">Ibnu Sabil</option>
                        <option value="Amil">Amil</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Hak</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" name="jumlah_hak" value="<?php echo $data['jumlah_hak']; ?>">
                </div>
            </div>


            <button type="submit" class="btn btn-inverse-success btn-fw">Submit</button>
        </form>
    </div>
</div>
