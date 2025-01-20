<?php
include('koneksi.php');
include('header.php');
$id = $_REQUEST['id_muzakki'];
$muzakki = mysqli_query($koneksi, "SELECT * FROM muzakki where id_muzakki = $id");
$m = mysqli_fetch_array($muzakki);
?>

    <div class="container">
    <div class="card-body">
            <h4 class="card-title">Bayar Zakat</h4>
            <p class="card-description">
            Data Pengumpulan
            </p>
            <form method="POST" action="proses_bayar.php">
            <input type="hidden" name="id_muzakki" value="<?= $m['id_muzakki']; ?>">
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $m['nama_muzakki']; ?>"class="form-control" id="inputText3" name="nama_KK" value="<?= $m['nama_muzakki']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $m['jumlah_tanggungan']; ?>" class="form-control" id="inputText3" name="jumlah_tanggungan" value="<?= $m['id_muzakki']; ?>" class="form-control" id="inputText3" name="nama_kk">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputSelect" class="col-sm-2 col-form-label">Jenis Fitrah</label>
                    <div class="col-sm-10">
                        <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="jenis_bayar">
                            <option hidden selected>Pilih Kategori</option>
                            <option value="beras">Beras</option>
                            <option value="uang">Uang</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText3" name="jumlah_tanggunganyangdibayar">
                    </div>
                </div>

                <button type="submit" class="btn btn-inverse-success btn-fw">Submit</button>
            </form>
        </div>
    </div>